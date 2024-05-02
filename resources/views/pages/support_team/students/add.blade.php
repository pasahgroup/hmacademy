@extends('layouts.master')
@section('page_title', 'Register Student')
@section('content')
        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Please fill The form Below To Register A New Student</h6>

                {!! Qs::getPanelOptions() !!}
            </div>

            <form id="ajax-reg" method="post" enctype="multipart/form-data" class="wizard-form steps-validation" action="{{ route('students.store') }}" data-fouc>
               @csrf
                <h6>Personal Information</h6>
                <fieldset>
                    
                     
                     <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Admission No: <span class="text-danger">*</span></label>
                                <input value="{{ old('adm_no') }}" required type="text" name="adm_no" placeholder="admission no" class="form-control">
                                </div>
                            </div>

                                <div class="col-md-3">
                            <div class="form-group">
                                <label>First Name: <span class="text-danger">*</span></label>
                                <input value="{{ old('name') }}" required type="text" name="name" placeholder="first name" class="form-control">
                                </div>
                            </div>
                            
                                <div class="col-md-3">
                            <div class="form-group">
                                <label>Middle Name: <span class="text-danger">*</span></label>
                                <input value="{{ old('middle_name') }}" required type="text" name="middle_name" placeholder="middle name" class="form-control">
                                </div>
                            </div>
                                <div class="col-md-3">
                            <div class="form-group">
                                <label>Surname:<span class="text-danger"></span></label>
                                <input value="{{ old('surname') }}" type="text" name="surname" placeholder="surname" class="form-control">
                                </div>
                            </div>                      
                    </div>


   <div class="row">
 <div class="col-md-3">
                            <div class="form-group">
                                <label>Date of Birth:</label>
                                <input name="dob" value="{{ old('dob') }}" type="text" class="form-control date-pick" placeholder="Select birth Date...">

                            </div>
                        </div>


  <div class="col-md-3">
                            <div class="form-group">
                                <label for="gender">Gender: <span class="text-danger">*</span></label>
                                <select class="select form-control" id="gender" name="gender" required data-fouc data-placeholder="Choose gender..">
                                    <option value=""></option>
                                    <option {{ (old('gender') == 'Male') ? 'selected' : '' }} value="Male">Male</option>
                                    <option {{ (old('gender') == 'Female') ? 'selected' : '' }} value="Female">Female</option>
                                </select>
                            </div>
                        </div>



                          <div class="col-md-3">
                            <div class="form-group">
                                <label for="tribe">Tribe: <span class="text-danger">*</span></label>
                                <select class="select form-control" id="tribe" name="tribe" required data-fouc data-placeholder="Choose tribe..">
                                    <option value=""></option>
                                    <option {{ (old('tribe') == 'Nyaturu') ? 'selected' : '' }} value="Nyaturu">Nyaturu</option>
                                    <option {{ (old('tribe') == 'Mchaga') ? 'selected' : '' }} value="Mchaga">Mchaga</option>
                                    <option {{ (old('tribe') == 'Pare') ? 'selected' : '' }} value="Pare">Pare</option>
                                      <option {{ (old('tribe') == 'Sukuma') ? 'selected' : '' }} value="Sukuma">Sukuma</option>
                                </select>
                            </div>
                         </div>


                             <div class="col-md-3">
                            <div class="form-group">
                                <label for="parental_status">Parental status: <span class="text-danger">*</span></label>
                                <select class="select form-control" id="parental_status" name="parental_status" required data-fouc data-placeholder="Choose parental status..">
                                    <option value=""></option>
                                    <option {{ (old('parental_status') == 'Both alive') ? 'selected' : '' }} value="Both alive">Both alive</option>
                                    <option {{ (old('parental_status') == 'Father') ? 'selected' : '' }} value="Father">Father</option>
                                    <option {{ (old('parental_status') == 'Mother') ? 'selected' : '' }} value="Mother">Mother</option>
                                      <option {{ (old('parental_status') == 'None of Them') ? 'selected' : '' }} value="None of Them">None of Them</option>
                                </select>
                            </div>
                        </div>

  </div>




  <div class="row">
                       

                           <div class="col-md-3">
                            <div class="form-group">
                                <label>Phone:</label>
                                <input value="{{ old('phone') }}" type="text" name="phone" class="form-control" placeholder="phone No" >
                            </div>
                        </div>

                  
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Email address: </label>
                                <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>

                                       


                           <div class="col-md-3">
                            <div class="form-group">
                                <label for="education">Education level: <span class="text-danger">*</span></label>
                                <select class="select form-control" id="education_level" name="education_level" required data-fouc data-placeholder="Choose education..">
                                    <option value=""></option>
                                    <option {{ (old('education_level') == 'Standard seven') ? 'selected' : '' }} value="Standard seven">Standard seven</option>
                                    <option {{ (old('education_level') == 'Form IV') ? 'selected' : '' }} value="Form IV">Form IV</option>
                                    <option {{ (old('education_level') == 'Form VI') ? 'selected' : '' }} value="Form VI">Form VI</option>
                                      <option {{ (old('education_level') == 'Certificate') ? 'selected' : '' }} value="Certificate">Certificate</option>

                                      <option {{ (old('education_level') == 'Diploma') ? 'selected' : '' }} value="Diploma">Diploma</option>
                                      <option {{ (old('education_level') == 'Degree') ? 'selected' : '' }} value="Degree">Degree</option>
                                      <option {{ (old('education_level') == 'Master') ? 'selected' : '' }} value="Master">Master</option>
                                      <option {{ (old('education_level') == 'Postponed') ? 'selected' : '' }} value="Postponed">Postponed</option>

                                      <option {{ (old('education_level') == 'Other') ? 'selected' : '' }} value="Other">Other</option>
                                      <option {{ (old('education_level') == 'None') ? 'selected' : '' }} value="None">None</option>
                                </select>
                            </div>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Physical Addressx: <span class="text-danger">*</span></label>
                                <input value="{{ old('address') }}" class="form-control" placeholder="Address" name="address" type="text" required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nal_id">Nationality2: <span class="text-danger">*</span></label>
                                    <select onchange="Countryf(this.value)" data-placeholder="Choose..." required name="nal_id" id="nal_id" class="select-search form-control">
                                    <option value=""></option>
                                     @foreach($countries as $country)
                                        <option {{ (old('nal_id') == $country->id ? 'selected' : '') }} value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="state_id">State: <span class="text-danger">*</span></label>
                            <select onchange="getLGA(this.value)" required data-placeholder="Choose.." class="select-search form-control" name="state_id" id="state_id">
                                <option value=""></option>
                                @foreach($states as $st)
                                    <option {{ (old('state_id') == $st->id ? 'selected' : '') }} value="{{ $st->id }}">{{ $st->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="lga_id">LGA: <span class="text-danger">*</span></label>
                            <select data-placeholder="Select State First" class="select-search form-control" name="lga_id" id="lga_id">
                              
                            </select>
                        </div>
                    </div>


{{--

        <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Physical Address: <span class="text-danger">*</span></label>
                                <input value="{{ old('address') }}" class="form-control" placeholder="Address" name="address" type="text" required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nal_id">Nationality: <span class="text-danger">*</span></label>
                                <select onchange="Countryf(this.value)" data-placeholder="Choose..." required name="nal_id" id="nal_id" class="select-search form-control">
                                    <option value=""></option>
                                    @foreach($countries as $country)
                                        <option {{ (old('nal_id') == $country->id ? 'selected' : '') }} value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="region">Region: <span class="text-danger">*</span></label>
                            <select onchange="Cityf(this.value)" data-placeholder="Choose.." class="select-search form-control" name="region" id="region">
                              
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="city">City: <span class="text-danger">*</span></label>
                            <select data-placeholder="Select State First" class="select-search form-control" name="city" id="city">
                              
                            </select>
                        </div>
                    </div>

--}}

                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group">
                                  <label class="d-block">Upload photo:</label>
                                <input value="{{ old('photo') }}" accept="image/*" type="file" name="photo" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div>

                </fieldset>

                <h6>Other Information</h6>
                <fieldset>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my_class_id">Class: <span class="text-danger">*</span></label>
                                <select onchange="getClassSections(this.value)" data-placeholder="Choose..." required name="my_class_id" id="my_class_id" class="select-search form-control">
                                    <option value=""></option>
                                    @foreach($my_classes as $c)
                                        <option {{ (old('my_class_id') == $c->id ? 'selected' : '') }} value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                </select>
                        </div>
                    </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="section_id">Section: <span class="text-danger">*</span></label>
                                <select data-placeholder="Select Class First" required name="section_id" id="section_id" class="select-search form-control">
                                    <option {{ (old('section_id')) ? 'selected' : '' }} value="{{ old('section_id') }}">{{ (old('section_id')) ? 'Selected' : '' }}</option>
                                </select>
                            </div>
                        </div>

                      

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="year_admitted">Year Admitted: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required name="year_admitted" id="year_admitted" class="select-search form-control">
                                    <option value=""></option>
                                    @for($y=date('Y', strtotime('- 10 years')); $y<=date('Y'); $y++)
                                        <option {{ (old('year_admitted') == $y) ? 'selected' : '' }} value="{{ $y }}">{{ $y }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>

            
            
 <div class="row"> 
    <h4>Parental Guardian Detail</h4>
 </div>

                    <div class="row">
                       
           <div class="col-md-3">
                            <div class="form-group">
                                 <label for="par">Guardian Name: </label>
                                <select data-placeholder="Choose..."  name="my_parent_id" id="my_parent_id" class="select-search form-control">
                                    <option  value=""></option>
                                    @foreach($parents as $p)
                                        <option {{ (old('my_parent_id') == Qs::hash($p->id)) ? 'selected' : '' }} value="{{ Qs::hash($p->id) }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            
 
                               <div class="form-group">
                                <label>Guardian Name: <span class="text-danger">*</span></label>
                                <input value="{{ old('name') }}" required type="text" name="my_parent_idx" id="my_parent_idx" placeholder="guardian name" class="form-control">
                                </div>                        

                            </div>
                        </div>




                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Phone Nox:</label>
                                <input type="text" name="phone_no" placeholder="phone No" class="form-control" value="{{ old('phone_no') }}">
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Guardian Photo:</label>
                                <input value="{{ old('guardian_photo') }}" accept="image/*" type="file" name="guardian_photo" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div>


<div class="row"> 
 <div class="col-md-3">
                            <div class="form-group">
                                <label for="designation">Designation: <span class="text-danger">*</span></label>
                                <select class="select form-control" id="designation" name="designation" required data-fouc data-placeholder="Choose education..">
                                    <option value=""></option>
                                    <option {{ (old('designation') == 'None') ? 'selected' : '' }} value="None">None</option>
                                    <option {{ (old('designation') == 'Manyara best view lodge') ? 'selected' : '' }} value="Manyara best view lodge">Manyara best view lodge</option>
                                    <option {{ (old('designation') == 'Ahadi lodge') ? 'selected' : '' }} value="Ahadi lodge">Ahadi lodge</option>
                                      <option {{ (old('designation') == 'Certificate') ? 'selected' : '' }} value="Amani Villa">Amani Villa</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </fieldset>

            </form>
        </div>
    @endsection
