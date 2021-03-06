@extends('layouts.master')

@section('content')
<div class="container">
      <h2>Client detail demonistration</h2>
   @include('client.includes.header')
   <table class="table table-bordered" id="table">
      <thead>
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Nationality</th>
            <th>DOB</th>
            <th>Edu-Background</th>
            <th>Member since</th>
         </tr>
      </thead>
   </table>
</div>
       
@endsection
@section('scripts')
<script>
         $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ url('clients.allclients') }}',
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'phone', name: 'phone' },
                        { data: 'gender', name: 'gender' },
                        { data: 'address', name: 'address' },
                        { data: 'nationality', name: 'nationality' },
                        { data: 'dob', name: 'dob' },
                        { data: 'edu_background', name: 'edu_background' },
                        { data: 'created_at', name: 'created_at' }
                     ]
            });
         });
         </script>

@endsection
