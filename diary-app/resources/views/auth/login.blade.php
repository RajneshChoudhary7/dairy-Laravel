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

<!-- In your Blade template head -->
<script src="{{ asset('js/face-api.js') }}"></script>

<video id="video" width="400" height="300" autoplay muted></video>
<canvas id="canvas" style="display:none;"></canvas>
<button id="captureButton">Capture Face for Signup</button>

<script>
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const captureButton = document.getElementById('captureButton');
    let stream = null;

    // Load face-api.js models (ensure you have copied them to /public/models/)
    Promise.all([
        faceapi.nets.tinyFaceDetector.loadFromUri("{{ asset('models') }}"),
        faceapi.nets.faceLandmark68Net.loadFromUri("{{ asset('models') }}"),
        faceapi.nets.faceRecognitionNet.loadFromUri("{{ asset('models') }}")
    ]).then(startVideo);

    function startVideo() {
        navigator.mediaDevices.getUserMedia({ video: {} })
            .then(function(s) {
                stream = s;
                video.srcObject = stream;
            })
            .catch(function(err) {
                console.error("Camera error: ", err);
                alert("Could not access the camera. Please use email/password login.");
            });
    }

    // Function to capture image and detect face
    async function captureFace() {
        if (!stream) {
            alert('Camera not available.');
            return null;
        }

        const displaySize = { width: video.width, height: video.height };
        faceapi.matchDimensions(canvas, displaySize);

        // Detect the single most prominent face
        const detection = await faceapi
            .detectSingleFace(video, new faceapi.TinyFaceDetectorOptions())
            .withFaceLandmarks()
            .withFaceDescriptor(); // This gets the embedding

        if (!detection) {
            alert('No face detected. Please try again.');
            return null;
        }

        // Draw the detection on the canvas and get the image data
        const resizedDetection = faceapi.resizeResults(detection, displaySize);
        faceapi.draw.drawDetections(canvas, resizedDetection);

        // Convert canvas to Base64 image string
        const base64Image = canvas.toDataURL('image/png');
        return base64Image;
    }

    // On signup form submission
    document.getElementById('signupForm').addEventListener('submit', async function(e) {
        e.preventDefault(); // Prevent immediate submission

        const faceImage = await captureFace();
        if (faceImage) {
            // Add the base64 image string to a hidden input in the form
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'face_image';
            hiddenInput.value = faceImage;
            this.appendChild(hiddenInput);

            // Now submit the form
            this.submit();
        }
    });

    // For the login page's AJAX request
    document.getElementById('faceLoginButton').addEventListener('click', async function() {
        const faceImage = await captureFace();
        if (faceImage) {
            // Send the image to the /face-login endpoint via AJAX
            fetch("{{ route('face.login') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ face_image: faceImage })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    alert(data.message);
                }
            });
        }
    });
</script>