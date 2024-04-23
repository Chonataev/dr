@extends('layouts.app')

@section('content')


    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <form class="container-fluid">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Test name</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Question 1</h4>
                        <p class="text-muted">Use the <code>.form-check-inline</code> class if you want the checkboxes to appear on the same line</p>
                        <div class="basic-form">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Option 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Option 2</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Option 3</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Option 4</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Question 2</h4>
                        <p class="text-muted">Use the <code>.form-check-inline</code> class if you want the checkboxes to appear on the same line</p>
                        <div class="basic-form">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Option 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Option 2</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="" >Option 3</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Option 4</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Question 3</h4>
                        <p class="text-muted">Use the <code>.form-check-inline</code> class if you want the checkboxes to appear on the same line</p>
                        <div class="basic-form">
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Option 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Option 2</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="" >Option 3</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">Option 4</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-cancel">Cancel</button>
                        <button class="btn btn-success">Send</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->




@endsection
