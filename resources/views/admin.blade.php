<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.page-wrapper {
    box-shadow: 0px 0px 11px;
    width: 100%;
    max-width: 600px;
    border-radius: 15px;
}

.portfolio-card {
    background: #fff;
    border-radius: 10px;
    padding: 22px;
}

.portfolio-card h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
    position: relative;
}

.form-group label {
    font-size: 16px;
    color: black;
    display: block;
    margin-bottom: 6px;
}

.form-group label span {
    color: red;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
}

.form-group textarea {
    height: 90px;
    resize: none;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #6b6fdc;
}

.btn {
    width: 100%;
    padding: 12px;
    background: linear-gradient(90deg, #5b5fd6, #3f3fa8);
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 15px;
    cursor: pointer;
}

.btn:hover {
    opacity: 0.9;
}

/* .file-input {
  cursor: pointer;
} */
    </style>

<body>

<div class="page-wrapper">
    <div class="portfolio-card">


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                         {{-- <li>{{ $error }}</li>  --}}
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-danger">
                {{ session('success') }}
            </div>
        @endif


        <h2>Add Skills</h2>

        <form action="{{ route('admin.skills.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label> Name <span>*</span></label>
                <input type="text" id="name" name="name" placeholder="Enter portfolio name" >
                @error('name')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Sub_skills <span>*</span></label>
                <input id="sub_skills" name="sub_skills" placeholder="Enter portfolio sub_skills"></input>
                @error('sub_skills')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Image<span>*</span></label>
                <input type="file" id="image" name="image" placeholder="https://example.com/image.jpg">
                @error('image')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn">Add Skills</button>
        </form>
    </div>
</div>

</body>
</html>
