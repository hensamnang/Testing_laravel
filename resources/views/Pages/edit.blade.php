@extends('layout.app')

<div class="card text-center">
    <div class="card-header"></div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <form action="{{ route('testTodos.update',$editTest->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">First Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" name="first_name" placeholder="First Name" value="{{ $editTest->firstname }}">
          </div>
        </div>

        <div class="form-group row">
          <label for="colFormLabel" class="col-sm-4 col-form-label">Last Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ $editTest->lastname }}">
          </div>
        </div>

        <div class="form-group row">
          <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Phone Numer</label>
          <div class="col-sm-8">
            <input type="number" class="form-control form-control-lg" name="phone_number" placeholder="Phone Number" value="{{ $editTest->phone }}">
          </div>
        </div>

        <div class="form-group row">
          <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="{{ $editTest->email }}">
          </div>
        </div>

        <div class="form-group row">
          <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Address</label>
          <div class="col-sm-8">
            <input type="text" class="form-control form-control-lg" name="address" placeholder="Address" value="{{ $editTest->address }}">
          </div>
        </div>

        <div class="form-group row">
          <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Gender</label>
          <div class="col-sm-8">
            <select name="gender" class="form-control">
                <option selected>Choose Gender</option>
                <option value="Female" {{($editTest->gender === 'Female') ? 'selected' : '' }}>Female</option>
                <option value="Male" {{ ($editTest->gender === 'Male') ? 'selected' : '' }}>Male</option>
            </select>
          </div>
        </div>

        <button type="button" class="btn btn-warning" >Close</button>
        <button type="submit" class="btn btn-success">Update</button>

    </form>
    </div>
    <div class="card-footer text-muted"></div>
  </div>

