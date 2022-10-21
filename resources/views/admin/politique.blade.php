@extends('admin.layouts.app')

@section('heading','Politiques et Confidentialités ')

@section('main_content')

@section('Button')
        <a href=" {{Route('Admin_Politique_Add')}} " class="btn btn-primary"><i class="fas fa-plus"></i> Nouveau </a>
@endsection

<section class="section">
    
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Titre</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($Politique_Display as $Values)
                               <tr>
                                <td> {{ $loop->iteration }} 
                                </td>
                                
                                <td>
                                    {{ $Values->titre_politique}}
                                </td>
                                <td class="pt_10 pb_10">
                                    <a href=" {{Route('Admin_Politique_Edit',['id'=>$Values->id])}}" class="btn btn-primary " >Editer</a>
                                    <a href="{{Route('Admin_Politique_Delete',['id'=>$Values->id])}}" class="btn btn-danger" onClick="return confirm('Voulez vous Supprimer ?');">Supprimer</a>
                                </td>
                            </tr>
                                   
                               @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection