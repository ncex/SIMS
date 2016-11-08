@extends('layouts.app')

@section('navbar')
	
   <nav>
    <div class="container nav-wrapper">
      <a href="#" class="brand-logo ">Logo</a>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Beranda</a></li>
        <li><a href="badges.html">E-learning</a></li>
        <li><a href="collapsible.html">Pembayaran</a></li>
        <li><a href="nilai">Nilai</a></li>
        <li><a href="collapsible.html">Info</a></li>
        <li><a href="collapsible.html">Forum</a></li>
      </ul>

      <ul id="slide-out" class="side-nav">
	    <li>
	    	<div class="userView">
	      		<div class="background">
	        		<img src="../img/office.jpg">
	      		</div>
		        <a href="#!user"><img class="circle" src="../img/avatar_siswi.jpg"></a>
		        <a href="#!name"><span class="white-text name">John Doe</span></a>
		        <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
	    	</div>
	    </li>
	    <li><a href="#">Beranda</a></li>
        <li><a href="#">E-learning</a></li>
        <li><a href="#">Pembayaran</a></li>
        <li><a href="#">Info</a></li>
        <li><a href="#">Forum</a></li>
	 </ul>
	</div>
  </nav>

@endsection

@section('content')
<section>
	<div class="row">
		<div id="info_sims_user">
			<div id="user_detile">
				<div class="user_info_img ">
					<img src="../img/avatar_siswi.jpg" alt="" class="circle responsive-img">
				</div>
				<div class="user_info_prof">
					<h3>Hello, Jessica !</h3>
					<p>2011141971</p>
					<ul>
						<li>Lorem ipsum dolor.</li>
						<li>Lorem ipsum dolor.</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container content">
			<div class="col s12 l8">
				<div class="card-sims">
				<h2>Jadwal Kelas</h2>
				<div class="collection">
				    <div class="collection-item">
				    	<table class="responsive-table linemaster">
				    		<tr>
				    			<td rowspan="3">
				    				<div class="hari">
				    					<span class="line1">Senin</span>
					    				<span class="line1 trans">Jan 01 2016</span> 
				    				</div>
				    			</td>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">7:30</span>
				    					<span class="line1 jam">9:00</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon1"></span>
										</div>
										<div class="materi">
											<span class="line1">MATEMATIKA</span>
				    						<span class="line1 trans">XII IPA 5</span>
										</div>

				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">Sukron Ma'mun S.kom</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">9:00</span>
				    					<span class="line1 jam">10:30</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon2"></span>
										</div>
										<div class="materi">
											<span class="line1">PHOTOSHOP BASIC </span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    				</div>
				    			</td>
				    			<td>
					    			<div class="lineInit">
					    				<span class="line1">Sukron Ma'mun S.kom</span>
					    				<span class="line1 trans">1 Attachment</span>
					    			</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td class="masterJam">
					    			<div class="lineInit">
						    			<span class="line1 jam">10:30</span>
						    			<span class="line1 jam">12:00</p></span>
						    		</div>
				    			</td>
				    			<td class="materi_kelas">
				    				<div class="lineInit ">
										<div class="dot">
											<span class="dot_icon3"></span>
										</div>
										<div class="materi">
											<span class="line1">KECAKAPAN</span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    					
				    				</div>
				    			</td>
				    			<td class="guru_materi">
				    				<div class="lineInit">
				    					<span class="line1">
				    						Krisna Singgih S.kom
				    					</span>
				    					<span class="line1 trans">1 Attachment</span>
				    				</div>
				    			</td>
				    		</tr>

				    	</table>
				    </div>
				    <div class="collection-item">
				    	<table class="responsive-table linemaster">
				    		<tr>
				    			<td rowspan="3">
				    				<div class="hari">
				    					<span class="line1">Selasa</span>
					    				<span class="line1 trans trans">Jan 02 2016</span> 
				    				</div>
				    			</td>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">7:30</span>
				    					<span class="line1 jam">9:00</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon1"></span>
										</div>
										<div class="materi">
											<span class="line1">MATEMATIKA</span>
				    						<span class="line1 trans">XII IPA 5</span>
										</div>

				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">Sukron Ma'mun S.kom</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">9:00</span>
				    					<span class="line1 jam">10:30</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon2"></span>
										</div>
										<div class="materi">
											<span class="line1">PHOTOSHOP BASIC </span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    				</div>
				    			</td>
				    			<td>
					    			<div class="lineInit">
					    				<span class="line1">Sukron Ma'mun S.kom</span>
					    				<span class="line1 trans">1 Attachment</span>
					    			</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td class="masterJam">
					    			<div class="lineInit">
						    			<span class="line1 jam">10:30</span>
						    			<span class="line1 jam">12:00</p></span>
						    		</div>
				    			</td>
				    			<td class="materi_kelas">
				    				<div class="lineInit ">
										<div class="dot">
											<span class="dot_icon3"></span>
										</div>
										<div class="materi">
											<span class="line1">KECAKAPAN</span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    					
				    				</div>
				    			</td>
				    			<td class="guru_materi">
				    				<div class="lineInit">
				    					<span class="line1">
				    						Krisna Singgih S.kom
				    					</span>
				    					<span class="line1 trans">1 Attachment</span>
				    				</div>
				    			</td>
				    		</tr>

				    	</table>
				    </div>
				    <div class="collection-item">
				    	<table class="responsive-table linemaster">
				    		<tr>
				    			<td rowspan="3">
				    				<div class="hari">
				    					<span class="line1">Rabu</span>
					    				<span class="line1 trans">Jan 03 2016</span> 
				    				</div>
				    			</td>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">7:30</span>
				    					<span class="line1 jam">9:00</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon1"></span>
										</div>
										<div class="materi">
											<span class="line1">MATEMATIKA</span>
				    						<span class="line1 trans">XII IPA 5</span>
										</div>

				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">Sukron Ma'mun S.kom</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">9:00</span>
				    					<span class="line1 jam">10:30</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon2"></span>
										</div>
										<div class="materi">
											<span class="line1">PHOTOSHOP BASIC </span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    				</div>
				    			</td>
				    			<td>
					    			<div class="lineInit">
					    				<span class="line1">Sukron Ma'mun S.kom</span>
					    				<span class="line1 trans">1 Attachment</span>
					    			</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td class="masterJam">
					    			<div class="lineInit">
						    			<span class="line1 jam">10:30</span>
						    			<span class="line1 jam">12:00</p></span>
						    		</div>
				    			</td>
				    			<td class="materi_kelas">
				    				<div class="lineInit ">
										<div class="dot">
											<span class="dot_icon3"></span>
										</div>
										<div class="materi">
											<span class="line1">KECAKAPAN</span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    					
				    				</div>
				    			</td>
				    			<td class="guru_materi">
				    				<div class="lineInit">
				    					<span class="line1">
				    						Krisna Singgih S.kom
				    					</span>
				    					<span class="line1 trans">1 Attachment</span>
				    				</div>
				    			</td>
				    		</tr>

				    	</table>
				    </div>
				    <div class="collection-item">
				    	<table class="responsive-table linemaster">
				    		<tr>
				    			<td rowspan="3">
				    				<div class="hari">
				    					<span class="line1">Kamis</span>
					    				<span class="line1 trans">Jan 04 2016</span> 
				    				</div>
				    			</td>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">7:30</span>
				    					<span class="line1 jam">9:00</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon1"></span>
										</div>
										<div class="materi">
											<span class="line1">MATEMATIKA</span>
				    						<span class="line1 trans">XII IPA 5</span>
										</div>

				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">Sukron Ma'mun S.kom</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">9:00</span>
				    					<span class="line1 jam">10:30</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon2"></span>
										</div>
										<div class="materi">
											<span class="line1">PHOTOSHOP BASIC </span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    				</div>
				    			</td>
				    			<td>
					    			<div class="lineInit">
					    				<span class="line1">Sukron Ma'mun S.kom</span>
					    				<span class="line1 trans">1 Attachment</span>
					    			</div>
				    			</td>
				    		</tr>
				    		<tr>
				    		
				    			<td class="masterJam">
					    			<div class="lineInit">
						    			<span class="line1 jam">10:30</span>
						    			<span class="line1 jam">12:00</p></span>
						    		</div>
				    			</td>
				    			<td class="materi_kelas">
				    				<div class="lineInit ">
										<div class="dot">
											<span class="dot_icon3"></span>
										</div>
										<div class="materi">
											<span class="line1">KECAKAPAN</span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    					
				    				</div>
				    			</td>
				    			<td class="guru_materi">
				    				<div class="lineInit">
				    					<span class="line1">
				    						Krisna Singgih S.kom
				    					</span>
				    					<span class="line1 trans">1 Attachment</span>
				    				</div>
				    			</td>
				    		</tr>

				    	</table>
				    </div>
				    <div class="collection-item">
				    	<table class="responsive-table linemaster">
				    		<tr>
				    			<td rowspan="3">
				    				<div class="hari">
				    					<span class="line1">Jumat</span>
					    				<span class="line1 trans">Jan 05 2016</span> 
				    				</div>
				    			</td>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">7:30</span>
				    					<span class="line1 jam">9:00</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon1"></span>
										</div>
										<div class="materi">
											<span class="line1">MATEMATIKA</span>
				    						<span class="line1 trans">XII IPA 5</span>
										</div>

				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">Sukron Ma'mun S.kom</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">9:00</span>
				    					<span class="line1 jam">10:30</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon2"></span>
										</div>
										<div class="materi">
											<span class="line1">PHOTOSHOP BASIC </span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    				</div>
				    			</td>
				    			<td>
					    			<div class="lineInit">
					    				<span class="line1">Sukron Ma'mun S.kom</span>
					    				<span class="line1 trans">1 Attachment</span>
					    			</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td class="masterJam">
					    			<div class="lineInit">
						    			<span class="line1 jam">10:30</span>
						    			<span class="line1 jam">12:00</p></span>
						    		</div>
				    			</td>
				    			<td class="materi_kelas">
				    				<div class="lineInit ">
										<div class="dot">
											<span class="dot_icon3"></span>
										</div>
										<div class="materi">
											<span class="line1">KECAKAPAN</span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    					
				    				</div>
				    			</td>
				    			<td class="guru_materi">
				    				<div class="lineInit">
				    					<span class="line1">
				    						Krisna Singgih S.kom
				    					</span>
				    					<span class="line1 trans">1 Attachment</span>
				    				</div>
				    			</td>
				    		</tr>

				    	</table>
				    </div>
				    <div class="collection-item">
				    	<table class="responsive-table linemaster">
				    		<tr>
				    			<td rowspan="3">
				    				<div class="hari">
				    					<span class="line1">Sabtu</span>
					    				<span class="line1 trans">Jan 06 2016</span> 
				    				</div>
				    			</td>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">7:30</span>
				    					<span class="line1 jam">9:00</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon1"></span>
										</div>
										<div class="materi">
											<span class="line1">MATEMATIKA</span>
				    						<span class="line1 trans">XII IPA 5</span>
										</div>

				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">Sukron Ma'mun S.kom</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td class="masterJam">
				    				<div class="lineInit">
				    					<span class="line1 jam">9:00</span>
				    					<span class="line1 jam">10:30</span>
				    				</div>
				    			</td>
				    			<td>
				    				<div class="lineInit">
				    					<div class="dot">
											<span class="dot_icon2"></span>
										</div>
										<div class="materi">
											<span class="line1">PHOTOSHOP BASIC </span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    				</div>
				    			</td>
				    			<td>
					    			<div class="lineInit">
					    				<span class="line1">Sukron Ma'mun S.kom</span>
					    				<span class="line1 trans">1 Attachment</span>
					    			</div>
				    			</td>
				    		</tr>
				    		<tr>
				    			<td class="masterJam">
					    			<div class="lineInit">
						    			<span class="line1 jam">10:30</span>
						    			<span class="line1 jam">12:00</p></span>
						    		</div>
				    			</td>
				    			<td class="materi_kelas">
				    				<div class="lineInit ">
										<div class="dot">
											<span class="dot_icon3"></span>
										</div>
										<div class="materi">
											<span class="line1">KECAKAPAN</span>
					    					<span class="line1 trans">XII IPA 5</span>
										</div>
				    					
				    				</div>
				    			</td>
				    			<td class="guru_materi">
				    				<div class="lineInit">
				    					<span class="line1">
				    						Krisna Singgih S.kom
				    					</span>
				    					<span class="line1 trans">1 Attachment</span>
				    				</div>
				    			</td>
				    		</tr>

				    	</table>
				    </div>
				    
				</div>
				</div>
			</div>
	
			<div class="col s12 l4">
				<div class="card-sims">
					<div class="top-rank">
						<h2 >Ceritanya Ini Tanggal</h2>
						<div class="collection">
						    <div class="collection-item">
						    	<div class="img left"><img src="../img/avatar_siswi.jpg" class="circle responsive-img" width="60" alt=""></div><div class="name center"><span>Krisna</span><span>XII IPA 5</span></div><div class="rank right">1</div>
						    </div>
						    <div class="collection-item">
						    	<div class="img left"><img src="../img/avatar_siswi.jpg" class="circle responsive-img" width="60" alt=""></div><div class="name center"><span>Rendi</span><span>XII IPA 5</span></div><div class="rank right">2</div>
						    </div>
						    <div class="collection-item">
						    	<div class="img left"><img src="../img/avatar_siswi.jpg" class="circle responsive-img" width="60" alt=""></div><div class="name center"><span>Inu</span><span>XII IPA 5</span></div><div class="rank right">3</div>
						    </div>
					  </div>
					</div>	
					</div>
				<!-- ====== Rangking ====== -->
				<div class="card-sims">
					<div class="top-rank">
						<h2 >TOP RANK</h2>
						<div class="collection">
						    <div class="collection-item">
						    	<div class="img left"><img src="../img/avatar_siswi.jpg" class="circle responsive-img" width="60" alt=""></div><div class="name center"><span>Krisna</span><span>XII IPA 5</span></div><div class="rank right">1</div>
						    </div>
						    <div class="collection-item">
						    	<div class="img left"><img src="../img/avatar_siswi.jpg" class="circle responsive-img" width="60" alt=""></div><div class="name center"><span>Rendi</span><span>XII IPA 5</span></div><div class="rank right">2</div>
						    </div>
						    <div class="collection-item">
						    	<div class="img left"><img src="../img/avatar_siswi.jpg" class="circle responsive-img" width="60" alt=""></div><div class="name center"><span>Inu</span><span>XII IPA 5</span></div><div class="rank right">3</div>
						    </div>
					  </div>
					</div>	
						</div>
			</div>
	
			</div>
		</div>
		
	</div>
</section>
@endsection

@section('script')
	
@endsection