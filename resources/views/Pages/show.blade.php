@extends('layout.app')

<div class="card text-center">
    <div class="card-header"></div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <form >
            @csrf
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">First Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" name="first_name" placeholder="First Name" value="{{ $testDetails->firstname }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabel" class="col-sm-4 col-form-label">Last Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ $testDetails->lastname }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Phone Numer</label>
              <div class="col-sm-8">
                <input type="number" class="form-control form-control-lg" name="phone_number" placeholder="Phone Number" value="{{ $testDetails->phone }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="{{ $testDetails->email }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Address</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-lg" name="address" placeholder="Address" value="{{ $testDetails->address }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Gender</label>
              <div class="col-sm-8">
                    <select name="gender" class="form-control">
                        <option selected>Choose Gender</option>
                        <option value="Female" {{($testDetails->gender === 'Female') ? 'selected' : '' }}>Female</option>
                        <option value="Male" {{ ($testDetails->gender === 'Male') ? 'selected' : '' }}>Male</option>
                    </select>
              </div>
            </div>

            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

          </form>
    </div>
    <div class="card-footer text-muted"></div>
  </div>

