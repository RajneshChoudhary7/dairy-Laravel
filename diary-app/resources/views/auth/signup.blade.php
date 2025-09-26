@extends('layouts.app')

@section('title', 'Signup - Dairy Management')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow p-4">
                <h3 class="text-center mb-4">Signup</h3>

                <form action="{{ route('signup.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Role</label>
                        <select name="role" class="form-select" required>
                            <option value="customer" selected>Customer</option>
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>
                            <option value="supplier">Supplier</option>
                        </select>
                    </div>

                    <!-- Face Capture -->
                    <div class="camera-section text-center">
                        <video id="signupVideo" width="320" height="240" autoplay muted></video>
                        <canvas id="signupCanvas" width="320" height="240" style="display:none;"></canvas>
                        <input type="hidden" name="face_image" id="signup_face_image">
                        <button type="button" class="btn btn-sm btn-info mt-2" id="captureSignup">Capture Face</button>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Signup</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => { document.getElementById('signupVideo').srcObject = stream; });

document.getElementById('captureSignup').addEventListener('click', () => {
    const video = document.getElementById('signupVideo');
    const canvas = document.getElementById('signupCanvas');
    const ctx = canvas.getContext('2d');
    ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
    document.getElementById('signup_face_image').value = canvas.toDataURL('image/png');
    alert("Face captured!");
});
</script>
@endsection
