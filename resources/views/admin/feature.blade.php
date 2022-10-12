@extends('admin.layouts.app')

@section('heading','Caracteristique ')

@section('main_content')

@section('Button')
        <a href=" {{Route('Admin_Feature_Add')}} " class="btn btn-primary"><i class="fas fa-plus"></i> Nouveau </a>
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
                                    <th>Icons</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach ($Feature_Display as $Values)
                               <tr>
                                <td> {{$loop->iteration}} </td>
                                <td> 
                                    <i class="{{ $Values->icons}}"></i>
                                </td>
                                <td>
                                    {{ $Values->heading}}
                                </td>
                                <td>
                                    {{  Str::limit($Values->text,80)}}
                                </td>
                                <td class="pt_10 pb_10">
                                    <a href=" {{Route('Admin_Feature_Edit',['id'=>$Values->id])}}" class="btn btn-primary " >Editer</a>
                                    <a href="{{Route('Admin_Feature_Delete',['id'=>$Values->id])}}" class="btn btn-danger" onClick="return confirm('Voulez vous Supprimer ?');">Supprimer</a>
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