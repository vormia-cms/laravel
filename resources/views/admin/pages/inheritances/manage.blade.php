{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h3>
                    Inheritance :
                </h3>
            </div>
            <div class="col-6 d-none d-md-block">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Inheritances</li>
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
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-title mb-1">
                        <h5><span>Add New Inheritance</span></h5>
                    </div>

                    <div class="card-body px-0">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="vrm-sec-box">
                                    <div id="typeTool" data-bs-toggle="collapse" data-bs-target="#collapseType" aria-expanded="false" aria-controls="collapseType" role="button">
                                        <div class="px-1 py-0 vrm-bg-color-dark">
                                            <div class="row">
                                                <div class="col-10">
                                                    <h4 class="card-title vrm-color-white">Create Inheritance Type</h4>
                                                </div>
                                                <div class="col-2 float-end">
                                                    <div class="collapse-icon">
                                                        <i class="bi bi-caret-down-fill vrm-color-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseType" class="collapse pt-1" aria-labelledby="typeTool" data-parent="#cardAccordion">
                                        <div class="row px-2 mt-2  justify-content-end">
                                            <div class="col-md-9 col-sm-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-12 col-12">
                                                        <input type="text" class="form-control" name="" placeholder="Enter Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 float-end">
                                                <button class="btn btn-sm btn-info vrm-plug-btn vrm-plug-save w-100">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Inheritance Type</label>
                                <fieldset class="form-group">
                                    <select class="form-select">
                                        <option>Continent</option>
                                    </select>
                                </fieldset>
                                <small>Select Inheritance Type</small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" placeholder="Visible Name">
                                    <small>The title is how public will see.</small>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Slug</label>
                                    <input type="text" class="form-control" placeholder="URL friendly name">
                                    <small>Lowercase url-link, Vormia can also generate this for you.</small>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Parent</label>
                                    <fieldset class="form-group">
                                        <select class="form-select">
                                            <option>-- Parent Self --</option>
                                        </select>
                                    </fieldset>
                                    <small>Select Parent Inheritance</small>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Description</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                    <small>More info about the inheritance.</small>
                                </div>
                            </div>

                            <!-- Extra -->
                            <div class="vrm-blog-extra" section-type="blog-extra"></div>
                        </div>
                    </div>

                    <!-- Action -->
                    <div class="card-footer">
                        <div class="row justify-content-end">
                            <div class="col-5">
                                <button type="button" class="btn btn-sm btn-success w-100 float-end">
                                    <i class="bi bi-cursor-fill"></i> Add Inheritance
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-body px-0">
                        <!-- Table control -->
                        <div class="vrm-controls px-1" section-type="controls">
                            <div class="row justify-content-between">
                                <div class="col-lg-2 col-sm-12 mb-1">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Bulk Action</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Activate</a></li>
                                            <li><a class="dropdown-item" href="#">Deactivate</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-12 mb-1">
                                    <form action="" class="float-end w-100">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search Categories">
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
                                                    <input type="checkbox" class="form-check-input vrm-td-check">
                                                </div>
                                            </div>
                                        </td>
                                        <th class="vrm-column vrm-th-primary">ID</th>
                                        <th class="vrm-column vrm-th-primary">Title</th>
                                        <th class="vrm-column">Slug</th>
                                        <th class="vrm-column">Parent</th>
                                        <th class="vrm-column">Type</th>
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
                                        <td class="vrm-column text-bold-500 vrm-th-primary" vrm-colname="ID">31</td>
                                        <td class="vrm-column vrm-th-primary vrm-td-title" vrm-colname="Title">
                                            <div class="vrm-td-div">
                                                <a href="">
                                                    Africa
                                                </a>

                                                <button class="vrm-tr-more-btn">
                                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                                </button>
                                            </div>
                                            <div class="row my-2">
                                                <div class="action">
                                                    <span>
                                                        <a href="{{ url('/vrm/inheritances/edit') }}">
                                                            <i class="bi bi-pencil"></i> Edit
                                                        </a>
                                                    </span>
                                                    <span class="status">
                                                        <a href="" class="deactivate">
                                                            <i class="bi bi-x-circle-fill"></i> Deactivate
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
                                        <td class="vrm-column" vrm-colname="Slug">
                                            <span>africa</span>
                                        </td>
                                        <td class="vrm-column" vrm-colname="Parent">
                                            <span>-</span>
                                        </td>
                                        <td class="vrm-column" vrm-colname="Type">
                                            <span>continent</span>
                                        </td>
                                        <td class="vrm-column published" vrm-colname="Published">
                                            <p>Visibility: Public</p>
                                            <p>Count: 5</p>
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
                                        <td class="vrm-column text-bold-500 vrm-th-primary" vrm-colname="ID">33</td>
                                        <td class="vrm-column vrm-th-primary vrm-td-title" vrm-colname="Title">
                                            <div class="vrm-td-div">
                                                <a href="">
                                                    Other
                                                </a>

                                                <button class="vrm-tr-more-btn">
                                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                                </button>
                                            </div>
                                            <div class="row my-2">
                                                <div class="action">
                                                    <span>
                                                        <a href="{{ url('/vrm/inheritances/edit') }}">
                                                            <i class="bi bi-pencil"></i> Edit
                                                        </a>
                                                    </span>
                                                    <span class="status">
                                                        <a href="" class="activate">
                                                            <i class="bi bi-check-circle-fill"></i> Activate
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
                                        <td class="vrm-column" vrm-colname="Slug">
                                            <span>other</span>
                                        </td>
                                        <td class="vrm-column" vrm-colname="Parent">
                                            <span>-</span>
                                        </td>
                                        <td class="vrm-column" vrm-colname="Type">
                                            <span>continent</span>
                                        </td>
                                        <td class="vrm-column published" vrm-colname="Published">
                                            <p>Visibility: Hidden</p>
                                            <p>Count: 2</p>
                                            <p>Status: Deactivated</p>
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
                                        <td class="vrm-column text-bold-500 vrm-th-primary" vrm-colname="ID">35</td>
                                        <td class="vrm-column vrm-th-primary vrm-td-title" vrm-colname="Title">
                                            <div class="vrm-td-div">
                                                <a href="">
                                                    Asia and Pacific
                                                </a>

                                                <button class="vrm-tr-more-btn">
                                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                                </button>
                                            </div>

                                            <div class="row my-2">
                                                <div class="action">
                                                    <span>
                                                        <a href="{{ url('/vrm/inheritances/edit') }}">
                                                            <i class="bi bi-pencil"></i> Edit
                                                        </a>
                                                    </span>
                                                    <span class="status">
                                                        <a href="" class="deactivate">
                                                            <i class="bi bi-x-circle-fill"></i> Deactivate
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
                                        <td class="vrm-column" vrm-colname="Slug">
                                            <span>asia-and-pacific</span>
                                        </td>
                                        <td class="vrm-column" vrm-colname="Parent">
                                            <span>
                                                <a href="{{ url('/vrm/inheritances/edit') }}">
                                                    Other
                                                </a>
                                            </span>
                                        </td>
                                        <td class="vrm-column" vrm-colname="Type">
                                            <span>continent</span>
                                        </td>
                                        <td class="vrm-column published" vrm-colname="Published">
                                            <p>Visibility: Private</p>
                                            <p>Count: 0</p>
                                            <p>Status: Active</p>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Footer -->
                                <tfoot>
                                    <tr>
                                        <td class="vrm-column vrm-check-column">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="form-check-input vrm-td-check">
                                                </div>
                                            </div>
                                        </td>
                                        <th class="vrm-column vrm-th-primary">ID</th>
                                        <th class="vrm-column vrm-th-primary">Title</th>
                                        <th class="vrm-column">Slug</th>
                                        <th class="vrm-column">Parent</th>
                                        <th class="vrm-column">Type</th>
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
            </div>
        </div>
    </section>
</div>
@endsection

