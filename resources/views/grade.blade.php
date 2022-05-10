@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="padding-top:100px; margin-bottom:50px">
            <div class="col-lg-6 mx-auto">
                <div class="text-left p-5" style="background-color:#fff">
                    <div class="brand-logo">
                        <img src="{{ asset('images/logo.png') }}">
                    </div>
                    <h3 style="padding-bottom:7px"><i class="fa fa-calculator" aria-hidden="true"></i>
                        Calculated MSc. CGPA Grade</h3>
                    <hr />

                    <div>
                        <h4>
                            @if (isset($gradepoint))
                                Percentage:
                                <strong style="color:#900">{{ $gradepoint }}%</strong>
                            @endif
                        </h4>
                    </div>

                    <div>
                        <h4>Degree Grade:
                            <strong style="color:#900">
                                @if ($gradepoint >= 70)
                                    {{ 'Distinction' }}
                                @elseif($gradepoint >= 60 && $gradepoint <= 69)
                                    {{ 'Merit' }}
                                @elseif($gradepoint >= 50 && $gradepoint <= 59)
                                    {{ 'Pass' }}
                                @elseif($gradepoint >= 40 && $gradepoint <= 49)
                                    {{ 'Borderline Pass' }}
                                @else
                                    {{ 'Fail' }}
                                @endif
                            </strong>
                        </h4>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div style="text-align:right">
                        <a class="btn btn-outline-primary" href="/" role="button"><i class="fa fa-arrow-left"></i>
                            Return Back To Calculator</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>
@endsection
