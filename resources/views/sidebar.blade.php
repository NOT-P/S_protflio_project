<nav class="col-md-3 col-lg-2 d-md-block sidebar py-3">
                <div class="px-3 mb-4">
                    <h4 class="text-white mb-0">Admin Panel</h4>
                    <small class="text-muted">Static page</small>
                </div>
                <ul class="nav flex-column px-2">
                    <li class="nav-item mb-1">
                        <a class="nav-link {{ Route::is('admin.skills') ? "active" : '' }}" href="{{ route('admin.skills') }}">
                            Add Skill
                        </a>
                    </li>

                    <li class="nav-item mb-1">
                        <a class="nav-link {{ Route::is('admin.projects') ? "active" : '' }} " href="{{ route('admin.projects') }}">
                            Add Project
                        </a>
                    </li>


                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ url('/') }}">
                            Back to Portfolio
                        </a>
                    </li>
                </ul>
            </nav>