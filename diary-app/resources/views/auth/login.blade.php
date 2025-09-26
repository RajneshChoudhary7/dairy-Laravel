@extends('layouts.app')

@section('title', 'Login - Dairy Management')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow p-4">
                <h3 class="text-center mb-4">Login</h3>

                <!-- Face Login -->
                <div class="text-center mb-3">
                    <video id="loginVideo" width="320" height="240" autoplay muted playsinline style="border:1px solid #ccc;"></video>
                    <button type="button" class="btn btn-primary mt-2" id="faceLoginBtn">Login with Face</button>
                </div>

                <hr class="my-4">

                <!-- Email/Password Fallback -->
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Login with Email</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Face API -->
<script defer src="https://cdn.jsdelivr.net/npm/face-api.js"></script>
<script>
document.addEventListener("DOMContentLoaded", async () => {
    const video = document.getElementById('loginVideo');

    // Load models (make sure they are in public/models/)
    await Promise.all([
        faceapi.nets.tinyFaceDetector.loadFromUri('/models'),
        faceapi.nets.faceLandmark68Net.loadFromUri('/models'),
        faceapi.nets.faceRecognitionNet.loadFromUri('/models')
    ]);

    // Start camera
    navigator.mediaDevices.getUserMedia({ video: true })
        .then(stream => {
            video.srcObject = stream;
            video.onloadedmetadata = () => {
                video.play();
            };
        })
        .catch(err => {
            console.error("Camera access error:", err);
            alert("Camera access denied! Please allow camera permission.");
        });

    // Face login button
    document.getElementById('faceLoginBtn').addEventListener('click', async () => {
        const detection = await faceapi.detectSingleFace(video, new faceapi.TinyFaceDetectorOptions())
                                       .withFaceLandmarks().withFaceDescriptor();

        if(!detection){ alert("No face detected!"); return; }

        // Capture snapshot
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth; 
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0);
        const faceImage = canvas.toDataURL('image/png');

        // Send to backend
        fetch("{{ route('face.login') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ face_image: faceImage })
        })
        .then(res => res.json())
        .then(data => {
            if(data.success){
                window.location.href = data.redirect;
            } else {
                alert("Face not recognized. Try again or use email login.");
            }
        });
    });
});
</script>
@endsection
