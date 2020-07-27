@extends('layouts.head')

<body>
	<div class="wrapper">
	    <div class="main-panel">

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="card">
                                <form method="post" action="/helper">
                                    @csrf
		                            <div class="card-header">
									    <h4 class="card-title">
											DrawSomething Helper
										</h4>
									</div>
		                            <div class="card-content">
	                                    <div class="form-group">
	                                        <label>Introduce las 12 letras</label>
	                                        <input class="form-control" name="letters" type="text" placeholder="Letras" minLength="12" maxLength="12" class="form-control">
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Introduce el número de letras a adivinar</label> 
	                                        <input class="form-control" name="numLetters" type="number" placeholder="Letras" class="form-control" max="12">
	                                    </div>
	                                    <button type="submit" class="btn btn-fill btn-info">Enviar</button>
		                            </div>
							    </form>
	                        </div> <!-- end card -->
	                    </div> <!--  end col-md-6  -->
	                </div> <!-- end row -->
	            </div>
	    	</div>
		</div>
	</div>
</body>

@extends('layouts.scripts')
