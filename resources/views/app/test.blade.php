@extends('layouts.app')

@section('content')


    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Test name</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <form class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <h4 class="card-title">Question 1</h4>
                            <p class="text-muted">Use the class if you want the checkboxes to appear on the same line</p>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio1" class="form-check-input" value="">Option 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio1"  class="form-check-input" value="">Option 2</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio1"  class="form-check-input" value="">Option 3</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio1"  class="form-check-input" value="">Option 4</label>
                                </div>
                            </div>
                        </div>

                        <div class="basic-form">
                            <h4 class="card-title">Question 2</h4>
                            <p class="text-muted">Use the class if you want the checkboxes to appear on the same line</p>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio2" class="form-check-input" value="">Option 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio2"  class="form-check-input" value="">Option 2</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio2"  class="form-check-input" value="">Option 3</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio2"  class="form-check-input" value="">Option 4</label>
                                </div>
                            </div>
                        </div>

                        <div class="basic-form">
                            <h4 class="card-title">Question 3</h4>
                            <p class="text-muted">Use the class if you want the checkboxes to appear on the same line</p>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio3" class="form-check-input" value="">Option 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio3"  class="form-check-input" value="">Option 2</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio3"  class="form-check-input" value="">Option 3</label>
                                </div>
                                <div class="form-check form-check-inline disabled">
                                    <label class="form-check-label">
                                    <input type="radio" name="optradio3"  class="form-check-input" value="">Option 4</label>
                                </div>
                            </div>
                        </div>

                        <div class="basic-form">
                            <button type="submit" class="btn btn-cancel">Cancel</button>
                            <button class="btn btn-success">Send</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Result</h4>
                        <span> 20 дан 10 туура </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->




@endsection
