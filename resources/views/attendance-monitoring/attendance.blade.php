<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Monitoring System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Attendance System</a>
        </nav>
    </header>
    <div class="container mt-4">
        <h2>Log Attendance</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form id="attendanceForm" method="POST" action="">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="userID" placeholder="Enter your userID">
            </div>
            <button type="button" class="btn btn-primary" onclick="submitForm('clock-in')" name="clock-in">Clock In</button>
            <button type="button" class="btn btn-primary" onclick="submitForm('clock-out')" name="clock-out">Clock Out</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function submitForm(action) {
            var form = document.getElementById('attendanceForm');
            form.action = action === 'clock-in' ? '{{ route('clock-in') }}' : '{{ route('clock-out') }}';
            form.submit();
        }
    </script>
</body>
</html>
