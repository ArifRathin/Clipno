
@extends('clippino.common')
@section('index')

    <!-- breadcumb area start -->
    <section class="breadcrumb-area breadcrumb-bg price">
        <div class="contiainer">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-inner">
                        <span class="subtitle">Every Time - Any Time!</span>
                        <h1 class="title">Trial Offer</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcumb area end -->

    <!-- trial offer area start -->
    <section class="trial-offer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trail-offer-form-wrapper">
                        <div class="trial-offer-header">
                            <div class="left-content-area">
                                <h4 class="title">Get a quote in 30 minutes</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{url('/trialOrderSend')}}" method="POST" id="trialForm" class="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <div class="form-element margin-bottom-30">
                                <label for="name">Your name
                                    <span>**</span>
                                </label>
                                <input type="text" id="name" name="name" placeholder="Type your name....." class="input-field borderd">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-element margin-bottom-30">
                                <label for="email">Your email
                                    <span>**</span>
                                </label>
                                <input type="email" id="email" name="email" placeholder="Type your email....." class="input-field borderd">
                            </div>
                        </div>
                    
                            <div class="col-lg-12">
                                <div class="form-element margin-bottom-30">
                                    <label for="message">Your message <span>**</span></label>
                                    <textarea rows="30" cols="10" name="message" id="message" placeholder="Type your message....." class="input-field textarea borderd"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-element margin-bottom-30">
                                    <label for="">Service you need <span>**</span></label>
                                    <div class="file-upload has-icon">
                                        <select class="input-field borderd" name="service1" id="">
                                            <option checked value="">Select Your Service</option>
                                            <option value="Clipping path">Clipping path</option>
                                            <option value="Image Masking">Image Masking</option>
                                            <option value="Image Optimization">Image Optimization</option>
                                            <option value="Mannequin Removal">Mannequin Removal</option>
                                            <option value="Shadow and Reflection">Shadow and Reflection</option>
                                            <option value="Photo Retouching">Photo Retouching</option>
                                        </select>
                                        <div class="the-icon">
                                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-element">
                                    <label>Upload File
                                        <span>**</span>
                                    </label>
                                    <div class="file-upload has-icon">
                                        <input type="file" name="image1"  id="imgInp" class="image-upload">
                                        <div class="image-upload-label">Upload file
                                            <span class="label-btn">Upload</span>
                                        </div>
                                        <div class="the-icon">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-element">
                                    <img id="blah" src="#" alt="" />
                                </div>
                            </div>
                            <hr>
                            <div class="col-lg-4">
                                <div class="form-element margin-bottom-30">
                                    <label for="">Service you need</label>
                                    <div class="file-upload has-icon">
                                        <select class="input-field borderd" name="service2" id="">
                                            <option checked value="">Select Your Service</option>
                                            <option value="Clipping path">Clipping path</option>
                                            <option value="Image Masking">Image Masking</option>
                                            <option value="Image Optimization">Image Optimization</option>
                                            <option value="Mannequin Removal">Mannequin Removal</option>
                                            <option value="Shadow and Reflection">Shadow and Reflection</option>
                                            <option value="Photo Retouching">Photo Retouching</option>
                                        </select>
                                        <div class="the-icon">
                                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-element">
                                    <label>Upload File
                                    </label>
                                    <div class="file-upload has-icon">
                                        <input type="file" name="image2" id="imgInp1" class="image-upload">
                                        <div class="image-upload-label">Upload file
                                            <span class="label-btn">Upload</span>
                                        </div>
                                        <div class="the-icon">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-element">
                                    <img id="blah1" src="#" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-12"  id="sendTrial">

                                <input type="submit" value="get an action" class="submit-btn btn-rounded btn-center">
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- trial offer area end -->

    
@endsection