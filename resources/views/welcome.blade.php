@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a href="#" wire:click="delete()" class="close" style="color:red" data-dismiss="alert" aria-label="close">&times;</a>
                                        </div>
                                        {{ Form::Label("account_number", "Account Number :", array('class' =>'col-md-5')) }}
                                        {{ Form::text("account", null, ['class' => 'form-control col-sm-6'])}}
                                    </div>
                                        <div class="row mt-2">
                                            {{ Form::Label("asd", " IFSC:", array('class' =>'col-md-5' )) }}
                                            {{ Form::text("key",  null, ['class' => 'form-control col-sm-6'])}}
                                        </div>
                                    <div>
                                        <a href="#" class="btn btn-success float-right mt-2" wire:click="save()">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 text-center">
                            <div class="card bg-white justify-content-center" style="min-height: 12rem;">
                                <div class='social-box'>
                                    <a href="https://www.facebook.com"><i class="fa fa-plus fa-5x"></i></a>
                                  </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
