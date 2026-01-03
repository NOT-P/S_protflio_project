@extends('frontend')
@section('title', 'Add Project')
@section('content')
            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="content-header mb-4 d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h4 mb-0">Add Projects</h2>
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

                        <!-- Add Projects Form -->
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Projects Information</h5>

                                <form action="{{ route('admin.projects.store') }}" method="POST"
                                      enctype="multipart/form-data" id="project-form">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Title
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="title" name="title"
                                               placeholder="Enter your title name">
                                        @error('title')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea type="text" class="form-control" id="description" name="description"
                                               placeholder=" Enter your description"></textarea>
                                        @error('description')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="technology" class="form-label">Technology
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="technology" name="technology"
                                               placeholder=" Enter your description">
                                        @error('technology')
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
                                        Add Projects
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


{{-- // namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use App\Models\Project;

// class ProjectSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//     Project::create([
//     'title' => 'E-Commerce Platform',
//     'description' => 'A fully functional e-commerce platform...',
//     'technology' => ['React', 'Node.js', 'MongoDB'],
//     ]);

//     }
// }  --}}