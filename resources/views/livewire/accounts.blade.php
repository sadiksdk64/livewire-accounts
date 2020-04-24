<div>
    <h6 class=" mb-2 p-0">Account(s)</h6>
    <div class="row">
    @foreach ($accounts as $index => $account)
        <div class="col-md-6">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="#" wire:click="delete({{$index}})" class="close" style="color:red" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
                        {{ Form::Label("account_number", "Account Number :", array('class' =>'col-md-5' , )) }}
                        {{ Form::text("account", !empty($account['account_number']) ? $account['account_number'] : null, ['class' => 'form-control col-sm-6','wire:model' => "accounts.$index.account_number"])}}
                    </div>
                    <div class="row mt-2">
                        {{ Form::Label("asd", " IFSC:", array('class' =>'col-md-5' )) }}
                        {{ Form::text("key",  null, ['class' => 'form-control col-sm-6'])}}
                    </div>
                    <div class="row mt-2">
                        {{ Form::Label("asd", " Branch:", array('class' =>'col-md-5' )) }}
                        {{ Form::text("key",  null, ['class' => 'form-control col-sm-6'])}}
                    </div>
                    
                    <div>
                        <a href="#" class="btn btn-success float-right mt-4" wire:click="save({{$index}})">Save</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="col-md-6 text-center">
        <div class="card bg-white justify-content-center" style="min-height: 12rem;" wire:click="add()">
            <div class='social-box'>
                <a ><i class="fa fa-plus fa-5x"></i></a>
              </div>
        </div>
    </div>
    </div>
</div>
