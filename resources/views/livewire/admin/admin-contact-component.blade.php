<div>
    <div class="container" style="padding: 30px 0;">
        <style>
            nav svg{
                height: 20px;
            }
            nav.hidden{
                display: block !important;
            }
        </style>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Message des Contacts
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Commentaires</th>
                                    <th>Date de creation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                            @foreach($contacts as $contact)
                                <tr>
                                    <th>{{$i++}}</th>
                                    <th>{{$contact->name}}</th>
                                    <th>{{$contact->email}}</th>
                                    <th>{{$contact->phone}}</th>
                                    <th>{{$contact->comment}}</th>
                                    <th>{{$contact->created_at}}</th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$contacts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
