{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Users :
                        <a href="{{ url('/vrm/users/add') }}" class="btn btn-primary">
                            <!-- plus icon -->
                            New <i class="bi bi-plus"></i>
                        </a>
                    </h3>
                </div>
                <div class="col-6 d-none d-md-block">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Section App --}}
@section('app')
<div class="page-content">
    <section class="vrm-content-zone">
        <div class="card">
            <div class="card-body px-0">
                <!-- Table control -->
                <div class="vrm-controls px-1" section-type="controls">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 mb-1 col-6">
                            <div class="input-group mb-3">
                                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Bulk Action</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Active</a></li>
                                    <li><a class="dropdown-item" href="#">Deactivate</a></li>
                                    <li><a class="dropdown-item" href="#">Lock Account</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="row">
                                <!-- Sort -->
                                <div class="col-lg-5 col-md-4 d-none d-md-block">
                                    <div class="input-group mb-3">
                                        <select class="form-select custom-select">
                                            <option selected value="1">All</option>
                                            <option value="2">Active</option>
                                            <option value="3">Inactive</option>
                                            <option value="6">Locked</option>
                                            <option value="6">Deleted</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-4 d-none d-md-block">
                                    <div class="input-group mb-3">
                                        <select class="form-select custom-select">
                                            <option selected>All</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Superadmin</option>
                                            <option value="2">Author</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 d-none d-md-block">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-info w-100">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">
                            <form action="" class="">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search Users">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <!-- table hover -->
                <div class="table-responsive px-1">
                    <table class="table vrm-table mb-0">
                        <!-- Head -->
                        <thead>
                            <tr>
                                <td class="vrm-column vrm-check-column">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" class="form-check-input vrm-td-check" name="">
                                        </div>
                                    </div>
                                </td>
                                <th class="vrm-column vrm-th-primary">ID</th>
                                <th class="vrm-column">Level</th>
                                <th class="vrm-column vrm-th-primary vrm-td-title">Name</th>
                                <th class="vrm-column">Logname</th>
                                <th class="vrm-column">Email</th>
                                <th class="vrm-column">Published</th>
                            </tr>
                        </thead>
                        <!-- Body -->
                        <tbody>
                            <tr>
                                <th class="vrm-column vrm-check-column">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" class="form-check-input vrm-td-check" name="">
                                        </div>
                                    </div>
                                </th>
                                <td class="vrm-column text-bold-500 vrm-th-primary" vrm-colname="ID">20</td>
                                <td class="vrm-column" vrm-colname="Level">
                                    <span>Author</span>
                                </td>
                                <td class="vrm-td-action vrm-width-40 vrm-column vrm-th-primary vrm-td-title" vrm-colname="Name">
                                    <div class="vrm-td-div">
                                        <p class="vrm-font-13 vrm-color-orange">Jane Doe</p>

                                        <button class="vrm-tr-more-btn">
                                            <i class="bi bi-arrow-down-circle-fill"></i>
                                        </button>
                                    </div>

                                    <div class="row my-2">
                                        <div class="action vrm-action-visible">
                                            <span class="status">
                                                <a href="" class="deactivate">
                                                    <i class="bi bi-x-circle-fill"></i> Deactivate
                                                </a>
                                            </span>
                                            <span>
                                                <a href="{{ url('/vrm/users/edit') }}">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                            </span>
                                            <span>
                                                <a href="{{ url('/vrm/users/view') }}">
                                                    <i class="bi bi-eye-fill"></i> View
                                                </a>
                                            </span>
                                            <span>
                                                <a href="" class="vrm-color-spe-grey-2">
                                                    <i class="bi bi-lock-fill"></i> Lock
                                                </a>
                                            </span>
                                            <span class="delete">
                                                <a href="">
                                                    <i class="bi bi-trash2-fill"></i> Delete
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="vrm-column" vrm-colname="Logname">
                                    <span>admin</span>
                                </td>
                                <td class="vrm-column" vrm-colname="Email">
                                    <span>janedoe@xyz.com</span>
                                </td>
                                <td class="vrm-column published" vrm-colname="Published">
                                    <p>2022/03/15 at 8:59 am</p>
                                    <p>Status: Active</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="vrm-column vrm-check-column">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" class="form-check-input vrm-td-check" name="">
                                        </div>
                                    </div>
                                </th>
                                <td class="vrm-column text-bold-500 vrm-th-primary" vrm-colname="ID">22</td>
                                <td class="vrm-column" vrm-colname="Level">
                                    <span>superadmin</span>
                                </td>
                                <td class="vrm-td-action vrm-width-40 vrm-column vrm-th-primary vrm-td-title" vrm-colname="Name">
                                    <div class="vrm-td-div">
                                        <p class="vrm-font-13 vrm-color-orange">John Doe</p>

                                        <button class="vrm-tr-more-btn">
                                            <i class="bi bi-arrow-down-circle-fill"></i>
                                        </button>
                                    </div>

                                    <div class="row my-2">
                                        <div class="action vrm-action-visible">
                                            <span class="status">
                                                <a href="" class="deactivate">
                                                    <i class="bi bi-x-circle-fill"></i> Deactivate
                                                </a>
                                            </span>
                                            <span>
                                                <a href="{{ url('/vrm/users/edit') }}">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                            </span>
                                            <span>
                                                <a href="{{ url('/vrm/users/view') }}">
                                                    <i class="bi bi-eye-fill"></i> View
                                                </a>
                                            </span>
                                            <span>
                                                <a href="" class="vrm-color-spe-grey-2">
                                                    <i class="bi bi-lock-fill"></i> Lock
                                                </a>
                                            </span>
                                            <span class="delete">
                                                <a href="">
                                                    <i class="bi bi-trash2-fill"></i> Delete
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="vrm-column" vrm-colname="Logname">
                                    <span>superadmin</span>
                                </td>
                                <td class="vrm-column" vrm-colname="Email">
                                    <span>johndoe@xyz.com</span>
                                </td>
                                <td class="vrm-column published" vrm-colname="Published">
                                    <p>2022/03/11 at 9:15 pm</p>
                                    <p>Status: Active</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="vrm-column vrm-check-column">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" class="form-check-input vrm-td-check" name="">
                                        </div>
                                    </div>
                                </th>
                                <td class="vrm-column text-bold-500 vrm-th-primary" vrm-colname="ID">23</td>
                                <td class="vrm-column" vrm-colname="Level">
                                    <span>superadmin</span>
                                </td>
                                <td class="vrm-td-action vrm-width-40 vrm-column vrm-th-primary vrm-td-title" vrm-colname="Name">
                                    <div class="vrm-td-div">
                                        <p class="vrm-font-13 vrm-color-orange">Jane Doe</p>

                                        <button class="vrm-tr-more-btn">
                                            <i class="bi bi-arrow-down-circle-fill"></i>
                                        </button>
                                    </div>

                                    <div class="row my-2">
                                        <div class="action vrm-action-visible">
                                            <span class="status">
                                                <a href="" class="activate">
                                                    <i class="bi bi-check-circle-fill"></i> Activate
                                                </a>
                                            </span>
                                            <span>
                                                <a href="{{ url('/vrm/users/edit') }}">
                                                    <i class="bi bi-pencil"></i> Edit
                                                </a>
                                            </span>
                                            <span>
                                                <a href="{{ url('/vrm/users/view') }}">
                                                    <i class="bi bi-eye-fill"></i> View
                                                </a>
                                            </span>
                                            <span>
                                                <a href="" class="vrm-color-spe-grey-2">
                                                    <i class="bi bi-lock-fill"></i> Unlock
                                                </a>
                                            </span>
                                            <span class="delete">
                                                <a href="">
                                                    <i class="bi bi-trash2-fill"></i> Delete
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="vrm-column" vrm-colname="Logname">
                                    <span>admin</span>
                                </td>
                                <td class="vrm-column" vrm-colname="Email">
                                    <span>jane@xyz.com</span>
                                </td>
                                <td class="vrm-column published" vrm-colname="Published">
                                    <p>2022/03/08 at 10:59 am</p>
                                    <p>Status: Inactive</p>
                                    <p>Account: Locked</p>
                                </td>
                            </tr>
                        </tbody>
                        <!-- Footer -->
                        <tfoot>
                            <tr>
                                <td class="vrm-column vrm-check-column">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" class="form-check-input vrm-td-check" name="">
                                        </div>
                                    </div>
                                </td>
                                <th class="vrm-column vrm-th-primary">ID</th>
                                <th class="vrm-column">Level</th>
                                <th class="vrm-column vrm-th-primary vrm-td-title">Name</th>
                                <th class="vrm-column">Logname</th>
                                <th class="vrm-column">Email</th>
                                <th class="vrm-column">Published</th>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="vrm-admin-pagination mt-2">
                        <span class="vrm-color-dark-red align-self-start">Found Items: 300 </span>

                        <nav aria-label="navigation">
                            <ul class="pagination pagination-primary">
                                <li class="page-item disabled d-none d-md-block"><a class="page-link" href="#">First</a></li>
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item px-2 pt-1 vrm-color-dark-red"> <span>1 to 20</span></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">
                                        <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                    </a>
                                </li>
                                <li class="page-item active d-none d-md-block"><a class="page-link" href="#">Last</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection
