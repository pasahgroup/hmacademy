@extends('layouts.master')
@section('page_title', 'Edit Student')
@section('content')



        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 id="ajax-title" class="card-title">Please fill The form Below To Edit record of {{ $sr->user->name }}</h6>

                {!! Qs::getPanelOptions() !!}
            </div>

            <form method="post" enctype="multipart/form-data" class="wizard-form steps-validation ajax-update" data-reload="#ajax-title" action="{{ route('students.update', Qs::hash($sr->id)) }}" data-fouc>
                @csrf @method('PUT')
                  <h6>Personal Information</h6>
                <fieldset>


          <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Admission No: <span class="text-danger">*</span></label>
                                <input value="{{ $sr->adm_no }}" required type="text" name="adm_no" placeholder="admission no" class="form-control">
                                </div>
                            </div>

                                <div class="col-md-3">
                            <div class="form-group">
                                <label>First Name: <span class="text-danger">*</span></label>
                                <input value="{{ $sr->user->name }}" required type="text" name="name" placeholder="first name" class="form-control">
                                </div>
                            </div>
                            
                                <div class="col-md-3">
                            <div class="form-group">
                                <label>Middle Name: <span class="text-danger">*</span></label>
                                <input value="{{ $sr->user->middle_name }}" required type="text" name="middle_name" placeholder="middle name" class="form-control">
                                </div>
                            </div>
                                <div class="col-md-3">
                            <div class="form-group">
                                <label>Surname:<span class="text-danger"></span></label>
                                <input value="{{ $sr->user->surname }}" type="text" name="surname" placeholder="surname" class="form-control">
                                </div>
                            </div>                      
         </div>





   <div class="row">
 <div class="col-md-3">
                            <div class="form-group">
                                <label>Date of Birth:</label>
                                 <input name="dob" value="{{ $sr->user->dob  }}" type="text" class="form-control date-pick" placeholder="Select Date...">


                            </div>
                        </div>

  <div class="col-md-3">
                            <div class="form-group">
                                <label for="gender">Gender:<span class="text-danger">*</span></label>
                                <select class="select form-control" id="gender" name="gender" required data-fouc data-placeholder="Choose..">
                                    <option value=""></option>
                                    <option {{ ($sr->user->gender  == 'Male' ? 'selected' : '') }} value="Male">Male</option>
                                    <option {{ ($sr->user->gender  == 'Female' ? 'selected' : '') }} value="Female">Female</option>
                                </select>
                            </div>
                        </div>



                          <div class="col-md-3">
                            <div class="form-group">
                                <label for="tribe">Tribe: <span class="text-danger">*</span></label>
                                <select class="select form-control" id="tribe" name="tribe" required data-fouc data-placeholder="Choose tribe..">
                                    <option value=""></option>                                         

                                    <option {{ ($sr->user->tribe  == 'Nyaturu' ? 'selected' : '') }} value="Nyaturu">Nyaturu</option>
                                    <option {{ ($sr->user->tribe  == 'Mchaga' ? 'selected' : '') }} value="Mchaga">Mchaga</option>
                                    <option {{ ($sr->user->tribe  == 'Pare' ? 'selected' : '') }} value="Pare">Pare</option>
                                    <option {{ ($sr->user->tribe  == 'Sukuma' ? 'selected' : '') }} value="Sukuma">Sukuma</option>
                                </select>
                            </div>
                        </div>


                             <div class="col-md-3">
                            <div class="form-group">
                                <label for="parental">Parental status: <span class="text-danger">*</span></label>
                                <select class="select form-control" id="parental_status" name="parental_status" required data-fouc data-placeholder="Choose parental status..">
                                    <option value=""></option>


                                    <option {{ ($sr->user->parental_status  == 'Both alive' ? 'selected' : '') }} value="Both alive">Both alive</option>
                                    <option {{ ($sr->user->parental_status  == 'Father' ? 'selected' : '') }} value="Father">Father</option>
                                    <option {{ ($sr->user->parental_status  == 'Mother' ? 'selected' : '') }} value="Mother">Mother</option>
                                    <option {{ ($sr->user->parental_status  == 'None of Them' ? 'selected' : '') }} value="None of Them">None of Them</option>
                                </select>
                            </div>
                        </div>

  </div>



 <div class="row">
                       

                           <div class="col-md-3">
                            <div class="form-group">
                                <label>Phone:</label>
                               <input value="{{ $sr->user->phone  }}" type="text" name="phone" class="form-control" placeholder="" >
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Email address: </label>
                                  <input value="{{ $sr->user->email  }}" type="email" name="email" class="form-control" placeholder="your@email.com">
                            </div>
                        </div>

                                       


                           <div class="col-md-3">
                            <div class="form-group">
                                <label for="education">Education level: <span class="text-danger">*</span></label>
                                <select class="select form-control" id="education_level" name="education_level" required data-fouc data-placeholder="Choose education..">
                                    <option value=""></option>                                   


 <option {{ ($sr->user->education_level  == 'Standard seven' ? 'selected' : '') }} value="Standard seven">Standard seven</option>
                                    <option {{ ($sr->user->education_level  == 'Form IV' ? 'selected' : '') }} value="Form IV">Form IV</option>
                                    <option {{ ($sr->user->education_level  == 'Form VI' ? 'selected' : '') }} value="Form VI">Form VI</option>
                                    <option {{ ($sr->user->education_level  == 'Certificate' ? 'selected' : '') }} value="Certificate">Certificate</option>


 <option {{ ($sr->user->education_level  == 'Diploma' ? 'selected' : '') }} value="Diploma">Diploma</option>
                                    <option {{ ($sr->user->education_level  == 'Degree' ? 'selected' : '') }} value="Degree">Degree</option>
                                    <option {{ ($sr->user->education_level  == 'Master' ? 'selected' : '') }} value="Master">Master</option>
                                    <option {{ ($sr->user->education_level  == 'Postponed' ? 'selected' : '') }} value="Postponed">Postponed</option>
                            

 <option {{ ($sr->user->education_level  == 'Other' ? 'selected' : '') }} value="Other">Other</option>
                                    <option {{ ($sr->user->education_level  == 'None' ? 'selected' : '') }} value="None">None</option>
                                </select>
                            </div>
                        </div>
                    </div>






     <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                                <label>Physical Address: <span class="text-danger">*</span></label>
                                 <input value="{{ $sr->user->address }}" class="form-control" placeholder="address" name="address" type="text" required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nal_id">Nationality: <span class="text-danger">*</span></label>
                                <select data-placeholder="Choose..." required name="nal_id" id="nal_id" class="select-search form-control">
                                    <option value=""></option>
                                    @foreach($nationals as $na)
                                        <option {{  ($sr->user->nal_id  == $na->id ? 'selected' : '') }} value="{{ $na->id }}">{{ $na->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="state_id">State: <span class="text-danger">*</span></label>
                            <select onchange="getLGA(this.value)" required data-placeholder="Choose.." class="select-search form-control" name="state_id" id="state_id">
                                <option value=""></option>
                                @foreach($states as $st)
                                    <option {{ ($sr->user->state_id  == $st->id ? 'selected' : '') }} value="{{ $st->id }}">{{ $st->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="lga_id">LGA: <span class="text-danger">*</span></label>
                            <select required data-placeholder="Select State First" class="select-search form-control" name="lga_id" id="lga_id">
                                @if($sr->user->lga_id)
                                    <option selected value="{{ $sr->user->lga_id }}">{{ $sr->user->lga->name}}</option>
                                @endif
                            </select>
                        </div>
                    </div>




                    <div class="row">
                    <!--     <div class="col-md-6">
                            <div class="form-group">
                                <label for="bg_id">Blood Group: </label>
                                <select class="select form-control" id="bg_id" name="bg_id" data-fouc data-placeholder="Choose..">
                                    <option value=""></option>
                                    @foreach(App\Models\BloodGroup::all() as $bg)
                                        <option {{ (old('bg_id') == $bg->id ? 'selected' : '') }} value="{{ $bg->id }}">{{ $bg->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                 <label class="d-block">Upload photo:</label>
                                <input value="{{ old('photo') }}" accept="image/*" type="file" name="photo" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div>



                <!--  -->


             <!--        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bg_id">Blood Group: </label>
                                <select class="select form-control" id="bg_id" name="bg_id" data-fouc data-placeholder="Choose..">
                                    <option value=""></option>
                                    @foreach(App\Models\BloodGroup::all() as $bg)
                                        <option {{ ($sr->user->bg_id  == $bg->id ? 'selected' : '') }} value="{{ $bg->id }}">{{ $bg->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Upload photo:</label>
                                <input value="{{ old('photo') }}" accept="image/*" type="file" name="photo" class="form-input-styled" data-fouc>
                                <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
                            </div>
                        </div>
                    </div> -->

                </fieldset>

               <h6>Other Information</h6>
                <fieldset>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my_class_id">Class: </label>
                                <select onchange="getClassSections(this.value)" name="my_class_id" required id="my_class_id" class="form-control select-search" data-placeholder="Select Class">
                                    <option value=""></option>
                                    @foreach($my_classes as $c)
                                        <option {{ $sr->my_class_id == $c->id ? 'selected' : '' }} value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="section_id">Section: </label>
                                <select name="section_id" required id="section_id" class="form-control select" data-placeholder="Select Section">
                                    <option value="{{ $sr->section_id }}">{{ $sr->section->name }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my_parent_id">Parent: </label>
                                <select data-placeholder="Choose..."  name="my_parent_id" id="my_parent_id" class="select-search form-control">
                                    <option  value=""></option>
                                    @foreach($parents as $p)
                                        <option {{ (Qs::hash($sr->parent_id) == Qs::hash($p->id)) ? 'selected' : '' }} value="{{ Qs::hash($p->id) }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="year_admitted">Year Admitted: </label>
                                <select name="year_admitted" data-placeholder="Choose..." id="year_admitted" class="select-search form-control">
                                    <option value=""></option>
                                    @for($y=date('Y', strtotime('- 10 years')); $y<=date('Y'); $y++)
                                        <option {{ ($sr->year_admitted == $y) ? 'selected' : '' }} value="{{ $y }}">{{ $y }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="dorm_id">Dormitory: </label>
                            <select data-placeholder="Choose..."  name="dorm_id" id="dorm_id" class="select-search form-control">
                                <option value=""></option>
                                @foreach($dorms as $d)
                                    <option {{ ($sr->dorm_id == $d->id) ? 'selected' : '' }} value="{{ $d->id }}">{{ $d->name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dormitory Room No:</label>
                                <input type="text" name="dorm_room_no" placeholder="Dormitory Room No" class="form-control" value="{{ $sr->dorm_room_no }}">
                            </div>
                        </div>
                    </div>
                </fieldset>

            </form>
        </div>
@endsection
