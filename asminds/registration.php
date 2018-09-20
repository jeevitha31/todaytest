<!DOCTYPE html>
<html>
	<head>
		<title>EMSLayout</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/jquery/3.3.1/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
		
		
		<style>
			body {
			  margin: 0;
			}

			/* Style the header */
			.header {
				background-color: #f1f1f1;
				padding: 20px;
				text-align: center;
			}
			h1{
				color:red;
			}
			
		
		</style>
		<script>
			
			$(document).ready(function(){
		 $('#contactForm').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fname: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
				regexp: {
				regexp: /^[a-z\s]+$/i,
				message: 'Invalid Format'
         }

                }
            },
			 lname: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
				regexp: {
				regexp: /^[a-z\s]+$/i,
				message: 'Invalid Format'
         }

                }
            },
			 mob: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
				regexp: {
				regexp: /^[0-9]+$/i,
				message: 'Invalid Format'
         }

                }
            },
			 image: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
                }
            },
			 dob: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
                }
            },
			upload: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
                }
            },
			ug: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
				regexp: {
				regexp: /^[a-z\s]+$/i,
				message: 'Invalid Format'
         }

                }
            },
			yop10: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
				regexp: {
				regexp: /^[0-9]+$/i,
				message: 'Invalid Format'
         }

                }
            },
			ugcollege: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
				regexp: {
				regexp: /^[a-z\s]+$/i,
				message: 'Invalid Format'
         }

                }
            },
			
			address1: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			address2: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			landmark: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			country: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			state: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			city: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			pincode: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
					regexp: {
					regexp: /^[0-9]+$/i,
					message: 'Invalid Format'
         }

				

                }
            },
			nationality: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			birthp: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			nativep: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			aadharno: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
					regexp: {
					regexp: /^[0-9]+$/i,
					message: 'Invalid Format'
         }

				

                }
            },
			panno: {
                validators: {
					regexp: {
					regexp: /^[0-9]+$/i,
					message: 'Invalid Format'
         }

				

                }
            },
			sno1: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			name1: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			dob1: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			relation1: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			occup1: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			add1: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
				

                }
            },
			cont1: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
				regexp: {
				regexp: /^[0-9]+$/i,
				message: 'Invalid Format'
         }

                }
            },
			
			
			
            
             
             
        }
		
		
       
    });	
		
		});
	</script>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top ">
			<div class="navbar-header">
				<h1>ASMINDS EMS</h1>
			</div>
		</nav>
		<br/><br/><br/><br/>
		<div class = "container">
			<form action="validate.php" id="contactForm" method="POST" data-toggle="validator" role="form" class=" form-horizontal" enctype="multipart/form-data">
			
				<div class="row">
					<h3><div class="p-3 mb-2 bg-primary text-white">Employee Details</div></h3>
					<br></br>
					
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-5"><label for="fname">First Name:</label></div>
							<div class="col-md-5">
								<input type="text" name="fname" id="fname" class="form-control col-md-12">
							</div>
							<br></br>
							<div class="col-md-5"><label for="lname">Last Name</label></div>
							<div class="col-md-5">
								<input type="text" name="lname" id="lname" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="dob">Date of Birth</label></div>
							<div class="col-md-5">
								<input type="date" name= "dob" id="dob" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="mob" >Mobile Number</label></div>
							<div class="col-md-5">
								<input type="text" name="mob" id="mob" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="upload">Upload Resume</label></div>
							<div class="col-md-5">
								<input type="file" name="upload" id="upload" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="image">Upload Photo</label></div>
							<div class="col-md-5">
								<input type="file" name="image" id="image" class="form-control">
							</div>
							<br></br>
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="row"><div class="col-md-5"><label for="ug">UG Degree</label></div>
							<div class="col-md-5">
								<input type="text"  name="ug" id="ug" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="yop10">Year Of PassedOut</label></div>
							<div class="col-md-5">
								<input type="text" name="yop10" id="yop10" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="ugcollege">College Name</label></div>
							<div class="col-md-5">
								<input type="text" name="ugcollege" id="ugcollege" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="pg">PG Degree</label></div>
							<div class="col-md-5">
								<input type="text" name="pg" id="pg" class="form-control">	
							</div>
							<br></br>
							<div class="col-md-5"><label for="yop12">Year Of PassedOut</label></div>
							<div class="col-md-5">
								<input type="text" name="yop12" id="yop12" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="pgcollege">College Name</label></div>
							<div class="col-md-5">
								<input type="text" name="pgcollege" id="pgcollege" class="form-control">
							</div>							
						</div>
						
					
					</div>
					
					
					
				</div>
				
				<div class="row">
					<h3><div class="p-3 mb-2 bg-primary text-white">Address For Communication</div></h3>
					<br></br>
					
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-5"><label for="address1">Address Line 1</label></div>
							<div class="col-md-5">
								<input type="text" name="address1" id="address1" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5" ><label for="address2">Address Line 2</label></div>
							<div class="col-md-5">
								<input type="text" name="address2" id="address2" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="landmark">LandMark</label></div>
							<div class="col-md-5">
								<input type="text" name="landmark" id="landmark" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="country">Country</label></div>
							<div class="col-md-5">
								<input type="text"  name="country" id="country" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="state">State</label></div>
							<div class="col-md-5">
								<input type="text" name="state" id="state" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="city">City<label></div>
							<div class="col-md-5">
								<input type="text" name="city" id="city" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="pincode">Pincode</label></div>
							<div class="col-md-5">
								<input type="text" name="pincode" id="pincode" class="form-control">
							</div>
							<br></br>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row"><div class="col-md-5"><label for="nationality">Nationality</label></div>
							<div class="col-md-5">
								<input type="text" id="nationality" name="nationality" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="birthp">Birth Place</label></div>
							<div class="col-md-5">
								<input type="text" id="birthp" name="birthp" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="nativep">Native place</label></div>
							<div class="col-md-5">
								<input type="text" id="nativep" name="nativep" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5"><label for="panacard">Pancard Availabe</label></div>
							<div class="col-md-5">
							<select class="form-control" id="pancard">
								<option>yes</option>
								<option>no</option>
							</select>
							</div>
							<br></br>
							<div class="col-md-5"><label for="panno">Permanent Account Number</label></div>
							<div class="col-md-5">
								<input type="text" id="panno" name="panno" class="form-control">
							</div>
							<br></br>	
							<div class="col-md-5"><label for="aadhar">Aadhaar Card Availabe</label></div>
							<div class="col-md-5">
								<select class="form-control" id="aadhar">
									<option>yes</option>
									<option>no</option>
							</select>
							</div>
							<br></br>
							<div class="col-md-5"><label for="aadharno">Aadhaar Card Number</label></div>
							<div class="col-md-5">
								<input type="text" id="aadharno" name="aadharno" class="form-control">
							</div>
							<br></br>	
						</div>
					</div>
				</div>
				<div class="row">
					<h3><div class="p-3 mb-2 bg-primary text-white">Details Of Family Members</div></h3>
					<br></br>
					
					<div class="col-md-12">
						<div class="row">
							<table class="table table-bordered">
								<thead>
								  <tr>
									<th>S.No</th>
									<th>Name</th>
									<th>Date Of Birth</th>
									<th>Relationship</th>
									<th>Occupation</th>
									<th>Address</th>
									<th>Contact Number</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td> <input type="text" name="sno1" id="sno1" class="form-control"> </td>
									<td> <input type="text"name="name1" id="name1"  class="form-control"></td>
									<td><input type="text" name="dob1" id="dob1" class="form-control"></td>
									<td><input type="text"name="relation1" id="relation1" class="form-control"></td>
									<td><input type="text" name="occup1" id="occup1" class="form-control"></td>
									<td><input type="text" name="add1" id="add1" class="form-control"></td>
									<td><input type="text" name="cont1" id="cont1" class="form-control"></td>
								  </tr>
								  <tr>
									<td> <input type="text" name="sno2" id="sno12" class="form-control"> </td>
									<td> <input type="text"name="name2" id="name2"  class="form-control"></td>
									<td><input type="text" name="dob2" id="dob2" class="form-control"></td>
									<td><input type="text"name="relation2" id="relation2" class="form-control"></td>
									<td><input type="text" name="occup2" id="occup2" class="form-control"></td>
									<td><input type="text" name="add2" id="add2" class="form-control"></td>
									<td><input type="text" name="cont2" id="cont2" class="form-control"></td>
								  </tr>
								   <tr>
									<td> <input type="text" name="sno3" id="sno3" class="form-control"> </td>
									<td> <input type="text"name="name3" id="name3"  class="form-control"></td>
									<td><input type="text" name="dob3" id="dob3" class="form-control"></td>
									<td><input type="text"name="relation3" id="relation3" class="form-control"></td>
									<td><input type="text" name="occup3" id="occup3" class="form-control"></td>
									<td><input type="text" name="add3" id="add3" class="form-control"></td>
									<td><input type="text" name="cont3" id="cont3" class="form-control"></td>
								  </tr>
								</tbody>
							</table>	
						</div>
					</div>	
				</div>
				<br/><br/>
				<div class ="row">
					<input type ="submit" value="SUBMIT" class="col-md-12 btn btn-primary">
				</div>
				<br/><br/>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<h1 style="font-size:30px" id="messages"></h1>
						</div>
					</div> 
				</div>
			</form>
			<br/><br/><br/>
		</div>

	</body>
</html>