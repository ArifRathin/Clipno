@extends('Uasers.include.master')

@section('content')

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id='editModal'>
                       <!--Add user  modal end-->
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">Edite User Profile</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <div class="modal-body">
                                     <form method='POST' id="updateForm" action="" enctype="multipart/form-data">
                                         {{csrf_field()}}
                                           <div class="row">
                                               <div class="col-sm-6">
                                                   <div class="form-group">
                                                     <label for="exampleInputEmail1">Name</label>
                                                     <small class="star-user">***</small>
                                                     <input type="text" name="name" class="form-control" placeholder="User name" required="" value="{{$user->name}}">
                                                   </div>
                                               </div>
                                               <div class="col-sm-6">
                                                   <div class="form-group">
                                                     <label for="exampleInputPassword1">Phone Number</label>
                                                     <small class="star-user">***</small>
                                                     <input type="number" name='phone' class="form-control" placeholder="Phone Number" required="" value="{{$user->profile->phone}}">
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="row">
                                               <div class="col-sm-6">
                                                   <div class="form-group">
                                                     <label for="exampleInputEmail1">Company Name</label>
                                                     <small class="star-user">***</small>
                                                     <input type="text" name='company' class="form-control" placeholder="Company Name" required="" value="{{$user->profile->company}}">
                                                   </div>
                                               </div>
                                               <div class="col-sm-6">
                                                   <div class="form-group">
                                                     <label for="exampleInputPassword1">Company Office Address</label>
                                                     <small class="star-user">***</small>
                                                     <input type="text" name='company_address' class="form-control" placeholder="Company Office Address" required="" value="{{$user->profile->company_address}}">
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="row">
                                               <div class="col-sm-6">
                                                   <div class="form-group">
                                                     <label for="exampleInputEmail1">Country</label>
                                                     <small class="star-user">***</small>
                                                     <input type="text" name='country' class="form-control" placeholder="Country" required="" value="{{$user->profile->country}}">
                                                   </div>
                                               </div>
                                               <div class="col-sm-6">
                                                   <div class="form-group">
                                                     <label for="exampleInputPassword1">Address</label>
                                                     <small class="star-user">***</small>
                                                     <textarea name="address" id="" required="" resize="none" class="form-control user_address" cols="30" rows="5">{{$user->profile->address}}</textarea>
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="row">
                                               <div class="col-sm-12">
                                                   <div class="form-group">
                                                     <label for="exampleInputPassword1">Profile Image</label>
                                                     <div class="form-group">
                                                           {{-- <div class="input-group input-file image-upload" name="Fichier1"> --}}
                                                             <div class="input-group">
                                                               {{-- <span class="input-group-btn">
                                                                   <button class="btn btn-info btn-choose" type="button">Choose</button>
                                                               </span> --}}
                                                               {{-- <input type="file" name='image' class="form-control" placeholder='Choose a file...' /> --}}
                                                               <input type="file" name='image' class="form-control" />
                                                               {{-- <span class="input-group-btn">
                                                                        <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                                               </span> --}}
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                         <button type='submit' class="btn btn-success btn-block"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>&nbsp;&nbsp;Update Profile</button>
                                       </form>

                                 </div>
                                 <div class="modal-footer">
                                 </div>
                               </div>
                         </div>
                       </div>

   <div class="customer_image">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="profile_img">
                       <img src="{{asset('/images/'.$user->profile->image)}}" alt="" id="profimg">
                       <button class="boxed-btn blank btn-bordered btn-rounded edite-btn" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;</i>Edite Profile</button>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <div class="show-user-info">
       <div class="card text-center">
         <div class="card-header">
           <div>
             <b>Company Name:</b><strong>&nbsp;&nbsp;<span id='usrcompany'>{{$user->profile->company}}</span></strong><br>
             <b>Company Address:</b><strong>&nbsp;&nbsp;<span id='companyaddr'>{{$user->profile->company_address}}</span></strong><br>
               <b>Country:&nbsp;&nbsp;<span id='country'>{{$user->profile->country}}</span></b><br>
               <b>Phone:&nbsp;&nbsp;<span id='phone'>{{$user->profile->phone}}</span></b>
           </div>
         </div>
         <div class="card-body user-info">
               <h6 class="card-text"><span id='name'>{{$user->name}}</span> || <span id='companyaddr'>{{$user->email}}</span></h6>
           <p class="card-text"></p>
           <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
         </div>
         <div class="card-footer text-muted">
           Last Update:&nbsp;<strong><span id='updatedat'>{{$user->profile->updated_at->format('D d M, Y H:i:s')}}</span></strong>
         </div>
       </div>
   </div>


                    {{-- <!--Add user  modal start-->
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <!--Add user  modal end-->
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edite User Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                    <form method="POST" action="" id="updateForm" enctype="multipart/form-data">
                                      @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Name</label>
                                                  <small class="star-user">***</small>
                                                  <input type="text" class="form-control" placeholder="User name" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1">Phone Number</label>
                                                  <small class="star-user">***</small>
                                                  <input type="number" class="form-control" placeholder="Phone Number" required="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Company Name</label>
                                                  <small class="star-user">***</small>
                                                  <input type="text" class="form-control" placeholder="Company Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1">Company Office Address</label>
                                                  <small class="star-user">***</small>
                                                  <input type="text" class="form-control" placeholder="Company Office Address" required="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Country</label>
                                                  <small class="star-user">***</small>
                                                  <input type="text" class="form-control" placeholder="Country" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1">Address</label>
                                                  <small class="star-user">***</small>
                                                  <textarea name="" id="" required="" resize="none" class="form-control user_address" cols="30" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1">Profile Image</label>
                                                  <div class="form-group">
                                                        <div class="input-group input-file image-upload" name="Fichier1">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-info btn-choose" type="button">Choose</button>
                                                            </span>
                                                            <input type="file" class="form-control" placeholder='Choose a file...' />
                                                            <span class="input-group-btn">
                                                                     <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      <button type="submit" class="btn btn-success btn-block"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>&nbsp;&nbsp;Update Profile</button>
                                    </form>

                              </div>
                              <div class="modal-footer">
                              </div>
                            </div>
                      </div>
                    </div>
                    
				<div class="row">
					<div class="col-md-12">
						<div class="customer_image">
						    <div class="container">
						        <div class="row">
						            <div class="col-md-12">
						                <div class="profile_img">
						                    <img src="{{asset('user/assets/img/user.jpg')}}" alt="">
						                    <button class="boxed-btn blank btn-bordered btn-rounded edite-btn" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;</i>Edite Profile</button>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>

						<div class="show-user-info">
						    <div class="card text-center">
						      <div class="card-header">
						        <div>
						            <b>Company Name:</b><strong>&nbsp;&nbsp;Genie-Iot</strong><br>
						            <b>Company Address:</b><strong>&nbsp;&nbsp;Kawran Bazar, Dhaka (1215),Bangladesh</strong><br>
						            <b>Country:&nbsp;&nbsp;Dhaka (1215),Bangladesh</b><br>
						            <b>Phone:&nbsp;&nbsp;01722-1595465</b>
						        </div>
						      </div>
						      <div class="card-body user-info">
						            <h6 class="card-text">Name: Md.Mashud Rana || Email:admin@gmail.com</h6>
						        <p class="card-text"></p>
						        <a href="#" class="btn btn-primary">Go somewhere</a>
						      </div>
						      <div class="card-footer text-muted">
						        Last Update:&nbsp;<strong>Aug 04 2019</strong>
						      </div>
						    </div>
						</div>	
					</div>
				</div> --}}
@endsection


@section('script')

<script>
    function bs_input_file() {
        $(".input-file").before(
            function() {
                if ( ! $(this).prev().hasClass('input-ghost') ) {
                    var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                    element.attr("name",$(this).attr("name"));
                    element.change(function(){
                        element.next(element).find('input').val((element.val()).split('\\').pop());
                    });
                    $(this).find("button.btn-choose").click(function(){
                        element.click();
                    });
                    $(this).find("button.btn-reset").click(function(){
                        element.val(null);
                        $(this).parents(".input-file").find('input').val('');
                    });
                    $(this).find('input').css("cursor","pointer");
                    $(this).find('input').mousedown(function() {
                        $(this).parents('.input-file').prev().click();
                        return false;
                    });
                    return element;
                }
            }
        );
    }
    $(function() {
        bs_input_file();
    });
</script>

 <script type="text/javascript">

    $(document).ready(function(){
    $('#updateForm').submit(function(e){
    e.preventDefault();
    var data = new FormData(this);
    $.ajax({
        url:'/profileUpdate',
        data:data,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST', 
        success:function(msge){
           // alert(msge.country);

          $('#name').html(msge.name);
          $('#usrcompany').html(msge.company);
          $('#companyaddr').html(msge.company_address);
          $('#phone').html(msge.phone);
          $('#country').html(msge.country);
          $('#updatedat').html(msge.updated_at);

          $('#profimg').attr('src','../images/'+msge.image);

          $('#editModal').modal('hide');
        }
    });
});
  });

  </script>


@endsection