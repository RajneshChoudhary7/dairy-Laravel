@extends('layouts.app')

@section('title', 'Signup - Dairy Management')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow p-4">
                <h3 class="text-center mb-4">Signup</h3>

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="{{ route('signup.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" class="form-select" required>
                            <option value="customer" selected>Customer</option>
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>
                            <option value="supplier">Supplier</option>
                        </select>
                        @error('role') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Camera Capture -->
        <div class="camera-section">
            <video id="video" width="320" height="240" autoplay></video>
            <button type="button" id="snap">Capture Face</button>
            <canvas id="canvas" width="320" height="240" style="display:none;"></canvas>
            <input type="hidden" name="face_image" id="face_image">
        </div>

                    <button type="submit" class="btn btn-primary w-100">Signup</button>
                </form>

                <p class="text-center mt-3">
                    Already have an account? <a href="{{ route('login') }}">Login here</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    // Access camera
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const snap = document.getElementById('snap');
    const faceInput = document.getElementById('face_image');

    navigator.mediaDevices.getUserMedia({ video: true })
        .then(stream => { video.srcObject = stream; })
        .catch(err => { console.error("Camera access error:", err); });

    // Capture snapshot
    snap.addEventListener('click', () => {
        const context = canvas.getContext('2d');
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        const dataURL = canvas.toDataURL('image/png');
        faceInput.value = dataURL;
        alert("Face captured successfully!");
    });
</script>
@endsection
