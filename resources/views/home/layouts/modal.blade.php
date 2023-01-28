<!-- Modal -->
@php $department = \App\Models\Department::get(); @endphp
<div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel"
    aria-hidden="true" style="z-index: 22220 !important; top:50%; bottom:50%; right:80%; left:20%; max-width:1000px">
    <div class="modal-dialog" role="document" style="max-width: 1000px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="appointmentModalLabel">Make an Appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form-two">
                    <form method="post" action="{{ route('user.appointment') }}" id="contact-form">@csrf
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Your Name" required="">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" placeholder="Your Phone" required="">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder="Email Address" required="">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label for="phone">Age</label>
                                <input type="text" name="age" placeholder="Your age" required="">
                                @error('age')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label for="date">Date</label>
                                <input type="date" name="date" placeholder="Select Date" required=""
                                    id="date">
                                @error('date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label for="department">Department</label>
                                <select name="department" id="department" required>
                                    <option disabled selected>Select a department</option>
                                    @foreach ($department as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('department')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label for="doctorName">Doctor Name</label>
                                <select class="form-control" id="doctorName" name="doctor">
                                    <option disabled selected>Select your Doctor</option>
                                </select>
                                @error('doctor')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <label for="timing">Time</label>
                                <select name="time" required id="timing">
                                    <option value="1">10AM-11AM</option>
                                    <option value="2">11AM-12pm</option>
                                    <option value="3">12PM-01PM</option>
                                    <option value="4">2PM-3PM</option>
                                    <option value="5">3PM-4PM</option>
                                    <option value="6">4PM-5PM</option>
                                    <option value="7">6PM-7PM</option>
                                    <option value="8">7PM-8PM</option>
                                    <option value="9">8PM-9PM</option>
                                </select>
                            </div>
                            @error('time')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label for="message">Message</label>
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <button type="submit" class="theme-btn btn-style-one">Make an Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
