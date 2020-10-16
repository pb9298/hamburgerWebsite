@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<main id="main_content">
            <div class="zig-zag-top">

            <div id="content2" class="main_content_header" style="background-image: none">
<p>Welcome User</p>
	<a></a>&nbsp;&nbsp;&nbsp;&nbsp;<a></a>
                <h2>Elija su Hamburguesa</h2>
					<div id="main_content_2" class="grid-container">
								<!-- View Cart Box Start -->

<!-- View Cart Box End -->
					
						
						
							<div>
                            @foreach ($lists1 as $list1)
								<form method="get" action="menu" style="background-color:rgba(128, 110, 159, 0.17);">
                                
									<img class="imgCSS1" src='{{ $list1->image }}'>
									<!--div class="bookmarkRibbon1"><span style="color:white;position: relative;text-align: center; font-size: smaller; top: -12px;">OFERTA</span></div-->
									<p>{{ $list1->item_name }}</p>
									<p>{{ $list1->category }}</p>
									<p>{{ $list1->calories }}</p>
									<p><b><font color="red">{{ $list1->price }}</font></b></p>
										<label>
											<span>Quantity</span>
											<input type="text" size="2" maxlength="2" name="item_qty" value="1" />
										</label>
									<input type="hidden" name="item_no" value="" />
									<input type="hidden" name="type" value="add" />
									<input type="hidden" name="return_url" value="" />
                                    @endforeach
									<div align="center"><button type="submit" class="add_to_cart buttonCart">Add</button></div>
								</form>
							</div><br><br>
					
					</div>						               
				</div>
            </div>
       
        </main>
@endsection