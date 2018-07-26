@if (true)
    <div class="contact slideanim" id="contact">
        <div class="container">
            <h3>Contact</h3>  

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="list-style-type: none;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session()->has("alert-success"))
                <div class="alert alert-success">
                    <ul style="list-style-type: none;">
                        <li>{{ session()->pull("alert-success") }}</li>
                    </ul>
                </div>
            @endif
            
            
            {!! Form::open(["url" => route("contact"), "method" => "POST", "class" => "contact_form"]) !!}                

                <div class="message">
                    <div class="col-md-6 col-sm-6 grid_6 c1">                        
                        {!! Form::text("name",  "",  ["class" => "text", "placeholder" => "Name",  "onfocus" => "this.value = '';", "onblur" => "if(this.value == ` `) {this.value = '';"]) !!}
                        {!! Form::text("email",  "",  ["class" => "text", "placeholder" => "Email", "onfocus" => "this.value = '';", "onblur" => "if(this.value == ` `) {this.value = '';"]) !!}
                        {!! Form::text("phone", "", ["class" => "text", "placeholder" => "Phone", "onfocus" => "this.value = '';", "onblur" => "if(this.value == ` `) {this.value = '';"]) !!}                        
                    </div>
            
                    <div class="col-md-6 col-sm-6 grid_6 c1">
                        {!! Form::textarea("message", "", ["class" => "name", "placeholder" => "Message", "onfocus" => "this.value = '';", "onblur" => "if (this.value == '') {this.value = '';}"]) !!}
                    </div>
                    <div class="clearfix"> </div>
                </div>

                {!! Form::submit("Send Message", ['class' => 'more_btn']) !!}
                
            {!! Form::close() !!}   
                         
         </div>
    </div>
@endif
