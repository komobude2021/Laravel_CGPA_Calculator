@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="padding-top:50px; margin-bottom:50px">
            <div class="col-lg-11 mx-auto">
                <div class="text-left p-5" style="background-color:#fff">
                    <div class="brand-logo">
                        <img src="{{ asset('images/logo.png') }}">
                    </div>
                    <h4 style="padding-bottom:7px">Hello! let's help you calculate your MSc. CGPA Grade</h4>
                    <h6 class="font-weight-light" style="padding-bottom:5px">
                        <i class="fa fa-calculator" aria-hidden="true"></i> 7 Modules | 180 points -
                        <span class="formred">Allowed Score For Each Module Range From 40 - 100</span>
                    </h6>
                    <form class="g-3" action="/process" method="POST" name="form1" id="form1" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6" style="padding-top:10px">
                                <div class="card">
                                    <div class="card-header card-h">
                                        First Semester Modules (60 points):
                                    </div>
                                    <div class="card-body card-b">

                                        <div class="row">
                                            <div class="col-md-12 err">
                                                @error('module_1_score')
                                                    *{{ $message }}
                                                @enderror
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" readonly value="First Module" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-select">
                                                    <option selected>20 points</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input name="module_1_score" type="number"
                                                    value="{{ old('module_1_score') }}" placeholder="Score" min="40"
                                                    max="100" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="row" style="padding-top:13px">
                                            <div class="col-md-12 err">
                                                @error('module_2_score')
                                                    *{{ $message }}
                                                @enderror
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" readonly value="Second Module" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-select">
                                                    <option selected>20 points</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input name="module_2_score" type="number"
                                                    value="{{ old('module_2_score') }}" placeholder="Score" min="40"
                                                    max="100" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="row" style="padding-top:13px">
                                            <div class="col-md-12 err">
                                                @error('module_3_score')
                                                    *{{ $message }}
                                                @enderror
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" readonly value="Third Module" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-select">
                                                    <option selected>20 points</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input name="module_3_score" type="number"
                                                    value="{{ old('module_3_score') }}" placeholder="Score" min="40"
                                                    max="100" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6" style="padding-top:10px">
                                <div class="card">
                                    <div class="card-header card-h">
                                        Second Semester Modules (60 points):
                                    </div>
                                    <div class="card-body card-b">
                                        <div class="row">
                                            <div class="col-md-12 err">
                                                @error('module_4_score')
                                                    *{{ $message }}
                                                @enderror
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" readonly value="Fourth Module" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-select">
                                                    <option selected>20 points</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input name="module_4_score" type="number"
                                                    value="{{ old('module_4_score') }}" placeholder="Score" min="40"
                                                    max="100" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="row" style="padding-top:13px">
                                            <div class="col-md-12 err">
                                                @error('module_5_score')
                                                    *{{ $message }}
                                                @enderror
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" readonly value="Fifth Module" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-select">
                                                    <option selected>20 points</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input name="module_5_score" type="number"
                                                    value="{{ old('module_5_score') }}" placeholder="Score" min="40"
                                                    max="100" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="row" style="padding-top:13px">
                                            <div class="col-md-12 err">
                                                @error('module_6_score')
                                                    *{{ $message }}
                                                @enderror
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" readonly value="Sixth Module" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-select">
                                                    <option selected>20 points</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input name="module_6_score" type="number"
                                                    value="{{ old('module_6_score') }}" placeholder="Score" min="40"
                                                    max="100" class="form-control" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12" style="padding-top:20px">
                            <div class="card">
                                <div class="card-header card-h">
                                    FInal Dissertation Module (60 points):
                                </div>
                                <div class="card-body card-b">
                                    <div class="row">
                                        <div class="col-md-12 err">
                                            @error('dissertation_score')
                                                *{{ $message }}
                                            @enderror
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" readonly value="Dissertation Module" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select">
                                                <option selected>60 points</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="dissertation_score" type="number"
                                                value="{{ old('dissertation_score') }}" placeholder="Score" min="40"
                                                max="100" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr />
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-calculator"
                                    aria-hidden="true"></i>
                                Calculate My CGPA Grade</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
