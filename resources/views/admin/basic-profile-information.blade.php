
<x-client-master>
@section('content')
 <div class="basic-form">
                <div class="form-header">
                    <div class="header-text" >
                        @if(auth()->user()->basicinfo===0)
                          <div class="circle">1</div>
                          @else
                          <div class="circle1">1</div>
                          @endif
                        
                      
                        <div  style="line-height: 1.75;color:#7A86A1 ;">{{__('massage.Information')}}  -------------------------------
                        </div>
                    </div>
                    <div class="header-text" >
                        @if(auth()->user()->qyc===0)
                        <div class="circle">2</div>
                        @else
                        <div class="circle1" >2</div>
                        @endif
                        <div  style="line-height: 1.75;color:#7A86A1 ;">{{__('massage.Financial')}}
                            ----------------------------------</div>
                    </div>
                    <div class="header-text" >
                        @if(auth()->user()->docs===0)
                        <div class="circle">3</div>
                        @else
                        <div class="circle1">3</div>
                        @endif
                        <div  style="line-height: 1.75;color:#7A86A1 ;">{{__('massage.Upload_Documents')}}</div>
                    </div>
                </div>
                <div class="form-main">
                    <h5>{{__('massage.Basic_information')}}</h5>
                    <div class="form-content">
                        <form action="  @if(!$info->isEmpty()) {{route('information.update',$info[0]->id)}}  @else {{route('information.store')}}  @endif "  method="post" class="">
                        @csrf
                        @if(!$info->isEmpty())
                            @method('PUT')
                        @endif
                            <div class="form-group">
                                <label for="" style="font-size:13px;width: 10%;line-height: 3;margin-left: 0.5rem;">
                                {{__('massage.Full_Name')}}</label>
                                <div style="width: 95%;display: flex;">
                                    <input @if(!$info->isEmpty())   value ="{{$fName}}" @else value="{{ old('f-name') }}"  @endif   style="@error('f-name')  border-color: red; @enderror"  type="text" name="f-name" placeholder="{{__('massage.First_Name')}}" class="input-basic @error('f-name') is-invalid @enderror">
                                    <input @if(!$info->isEmpty())  value ="{{$LName}}" @else value="{{ old('l-name') }}"   @endif  style="@error('l-name')  border-color: red; @enderror border-radius: 0 15px 15px 0 ;" type="text" name="l-name" placeholder="{{__('massage.Last_Name')}}"
                                         class="input-basic">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""
                                    style="font-size:13px;width: 10%;line-height: 3;margin-left: 0.5rem;">{{__('massage.Your_email')}}</label>
                                <div style="width: 95%;display: flex;">
                                    <input @if(!$info->isEmpty()) disabled value ="{{$info[0]->email}}" @else value="{{ old('email') }}"   @endif  style="@error('email')  border-color: red; @enderror" type="text" name="email" placeholder="{{__('massage.Enter_Email')}}" class="input-basic i-input">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""
                                    style="font-size:13px;width: 10%;line-height: 3;margin-left: 0.5rem;">{{__('massage.phone')}}</label>
                                <div style="width: 95%;display: flex;">
                                    <input @if(!$info->isEmpty()) disabled value ="{{$info[0]->phone}}" @else value="{{ old('phone') }}"   @endif  style="@error('phone')  border-color: red; @enderror" type="number" name="phone"  class="input-basic i-75-input">
                                    <select @if(!$info->isEmpty()) disabled  @else ""  @endif style="@error('phone_type')  border-color: red; @enderror border-radius: 0 15px 15px 0 ;" name="phone_type" class="i-quarter-input" type="text" name="l-name">
                                        @if(!$info->isEmpty()) <option value="{{$info[0]->phone_type}}">{{$info[0]->phone_type}}</option> @else ""  @endif
                                        <option value="mobile">{{__('massage.Mobile')}}</option>
                                        <option value="phone">{{__('massage.phone')}}</option>
                                        <option value="whatsapp">{{__('massage.Whatsapp')}}</option>
                                    </select>
                                    
                               <button onclick="openModal()" type="button" class="form-btn-basic btnplus" >+</button>
       
                                </div>
                            </div>
                            <div class="form-group phone2">
                                <label for=""
                                    style="font-size:13px;width: 10%;line-height: 3;margin-left: 0.5rem;">{{__('massage.2phone')}}</label>
                                <div style="width: 95%;display: flex;">
                                    <input @if(!$info->isEmpty()) disabled value ="{{$info[0]->phone2}}" @else ""  @endif  style="@error('phone')  border-color: red; @enderror" type="number" name="phone2"  class="input-basic i-input">
                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" style="font-size:10px;width: 10%;line-height: 5;margin-left: 0.5rem;">
                                {{__('massage.Birth')}}
                                </label>
                                <div style="width: 95%;display: flex;">
                                    <input @if(!$info->isEmpty()) disabled value ="{{$info[0]->Birth}}" @else value="{{ old('Birth') }}"   @endif style="@error('Birth')  border-color: red; @enderror" type="date" name="Birth"  class="input-basic i-input">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""
                                    style="font-size:13px;width: 10%;line-height: 3;margin-left: 0.5rem;">{{__('massage.Citizenship')}}</label>
                                <div style="width: 95%;display: flex;">
                                    <select  @if(!$info->isEmpty()) disabled  @else ""  @endif  type="text" name="Citizenship" placeholder="Citizenship" class="i-input">
                                    @if(!$info->isEmpty()) <option value="{{$info[0]->citizenship}}">{{$info[0]->citizenship}}</option> @else ""  @endif

                                    <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordanjordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for=""
                                    style="font-size:13px;width: 10%;line-height: 3;margin-left: 0.5rem;">{{__('massage.Gender')}}</label>
                                <div style="width: 95%;display: flex;">
                                    <select  @if(!$info->isEmpty()) disabled  @else ""  @endif  type="text" name="Gender" placeholder="Tony" class="i-input">
                                    @if(!$info->isEmpty()) <option value="{{$info[0]->gender}}">{{$info[0]->gender}}</option> @else ""  @endif

                                    <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""
                                    style="font-size:13px;width: 10%;line-height: 3;margin-left: 0.5rem;">{{__('massage.Location')}}</label>
                                <div style="width: 95%;display: flex;">
                                    <select  @if(!$info->isEmpty()) disabled  @else ""  @endif   name="Location" placeholder="Citizenship" class="i-input">
                                    @if(!$info->isEmpty()) <option value="{{$info[0]->location}}">{{$info[0]->location}}</option> @else ""  @endif
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordanjordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                        <option value="jordan">jordan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" style="font-size:13px;width: 10%;line-height: 3;margin-left: 0.5rem;"></label>
                                <div style="width: 95%;display: flex;">
                                <input  @if(!$info->isEmpty()) disabled value ="{{$info[0]->city}}" @else value="{{ old('city') }}"  @endif  style="@error('city')  border-color: red; @enderror" type="text" name="city" placeholder="{{__('massage.city')}}" class="input-basic">
                                <input  @if(!$info->isEmpty()) disabled value ="{{$info[0]->state}}" @else value="{{ old('State') }}"  @endif  style="@error('State')  border-color: red; @enderror border-radius: 0 15px 15px 0 ; " type="text" name="State" placeholder="{{__('massage.State')}}" class="input-basic">
                               </div>
                           </div>
                            <div class="form-group">
                                <label for="" style="font-size:13px;width: 10%;line-height: 3;margin-left: 0.5rem;">{{__('massage.address')}}</label>
                                <div style="width: 95%;display: flex;">
                                <input  @if(!$info->isEmpty()) disabled value ="{{$info[0]->adders}}" @else value="{{ old('Adders') }}"  @endif style="@error('Adders')  border-color: red; @enderror" type="text" name="Adders" placeholder="{{__('massage.address')}}" class="input-basic">
                                <input @if(!$info->isEmpty()) disabled value ="{{$info[0]->zip_code}}" @else value="{{ old('Zip_Code') }}"  @endif style="@error('Zip_Code')  border-color: red; @enderror border-radius: 0 15px 15px 0 ;" type="number" name="Zip_Code" placeholder="Zip Code"  class="input-basic">
                               </div>
                           </div>
                           <div class="btn-group">
                               <button type="submit" class="form-btn">{{__('massage.next')}}</button>
                           </div>
                        </form>
                    </div>

                </div>
            </div>
@endsection
</x-client-master>