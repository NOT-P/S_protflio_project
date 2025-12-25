@extends('frontend')
@section('title', 'Add Project')
@section('content')
            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="content-header mb-4 d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-0">Add Skills</h2>
                        {{-- <small class="text-muted">Simple admin form built with Bootstrap &amp; jQuery</small> --}}
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-xl-6">
                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            {{-- <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                     @endforeach 
                                </ul>
                            </div> --}}
                        @endif

                        {{-- Success Message --}}
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Add Skill Form -->
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Skill Information</h5>

                                <form action="{{ route('admin.skills.store') }}" method="POST"
                                      enctype="multipart/form-data" id="skill-form">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Enter skill name">
                                        @error('name')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="sub_skills" class="form-label">Sub Skills
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="sub_skills" name="sub_skills"
                                               placeholder="e.g. HTML, CSS, JavaScript">
                                        @error('sub_skills')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @error('image')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text">PNG, JPG, SVG up to 2MB.</div>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">
                                        Add Skill
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </main>

    <script>
        // Example jQuery usage: scroll to top when form is submitted
        $(function () {
            $('#skill-form').on('submit', function () {
                $('html, body').animate({ scrollTop: 0 }, 300);
            });
        });
    </script>
@endsection