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
                    <canvas id="loginCanvas" width="320" height="240" style="display:none;"></canvas>
                    <button type="button" class="btn btn-primary mt-2" id="faceLoginBtn">Login with Face</button>
                </div>

                <hr class="my-4">

                <!-- Email/Password fallback -->
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

<!-- Load Face API -->
<script src="https://cdn.jsdelivr.net/npm/face-api.js@0.22.2/dist/face-api.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const video = document.getElementById('loginVideo');
    const canvas = document.getElementById('loginCanvas');
    const ctx = canvas.getContext('2d');

    // Load face-api.js models
    Promise.all([
        faceapi.nets.tinyFaceDetector.loadFromUri("{{ asset('models') }}"),
        faceapi.nets.faceLandmark68Net.loadFromUri("{{ asset('models') }}"),
        faceapi.nets.faceRecognitionNet.loadFromUri("{{ asset('models') }}")
    ]).then(startVideo);

    // Start video stream
    function startVideo() {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
            })
            .catch(err => {
                console.error("Camera error:", err);
                alert("Camera not accessible. Use email/password login.");
            });
    }

    // Capture face snapshot
    async function captureFace() {
        const displaySize = { width: video.width, height: video.height };
        faceapi.matchDimensions(canvas, displaySize);

        // Detect face
        const detection = await faceapi
            .detectSingleFace(video, new faceapi.TinyFaceDetectorOptions())
            .withFaceLandmarks()
            .withFaceDescriptor();

        if (!detection) {
            alert('No face detected. Please try again.');
            return null;
        }

        // Draw snapshot on canvas
        ctx.drawImage(video, 0, 0, video.width, video.height);

        return canvas.toDataURL('image/png'); // return base64 image
    }

    // Face login button
    document.getElementById('faceLoginBtn').addEventListener('click', async () => {
        const faceImage = await captureFace();
        if (!faceImage) return;

        fetch("{{ route('face.login') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ face_image: faceImage })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                window.location.href = data.redirect;
            } else {
                alert(data.message || "Face not recognized.");
            }
        })
        .catch(err => console.error("AJAX error:", err));
    });
});
</script>
@endsection
