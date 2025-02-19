<div class="container mt-0 mb-0">  
    <div style="display: flex; align-items: center; ">
        {{-- <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; padding: 0;"> --}}
        <img src="/assets/icon/logokabupatenblora.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; padding: 0;">
        <h1 style="margin-left: 5px;">
            <span>MASJAKI</span>BLORA
            <p style="margin: 0; font-size: 16px; color: white" >Dinas Pekerjaan Umum & Penataan Ruang</p>
        </h1>
    </div>

    <label for="menu"><i class="fas fa-bars"></i></label>
    <input type="checkbox" id="menu">
    <nav>
        <style>
            .dropdown {
                position: relative;
                display: inline-block;
            }
            .dropdown a {
                display: flex;
                align-items: center;
                text-decoration: none;
                color: slategray; /* Warna teks untuk tautan PROFIL */
            }
            .dropdown .arrow {
                margin-left: 5px;
                color: slategray; /* Warna teks untuk panah */
                font-size: 0.8em; /* Ukuran ikon panah */
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 325px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .dropdown-content a {
                color: slategray; /* Warna teks untuk menu dropdown */
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            .dropdown-content a:hover {
                background-color: #f1f1f1;
            }
            .dropdown:hover .dropdown-content {
                display: block;
            }
        </style>
    
        <a href="/">BERANDA</a>
        
        <div class="dropdown">
            <a href="#" class="dropdown-toggle">KELEMBAGAAN</a>
            <div class="dropdown-content" style="min-width: 400px;">
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-sitemap" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/profil/struktur" style="color: black; text-decoration: none; text-align:left">STRUKTUR DPUPR KABUPATEN BLORA</a>
                    {{-- <a href="/404" style="color: black; text-decoration: none; text-align:left">STRUKTUR DPUPR KABUPATEN BLORA</a> --}}
                </div>
        
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-project-diagram" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    {{-- <a href="/profil/rencanastrategis" style="color: black; text-decoration: none; text-align:left">RENSTRA PROGRAM JASA KONSTRUKSI</a> --}}
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">RENSTRA PROGRAM JASA KONSTRUKSI</a>
                </div>
        
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-tasks" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/profil/tupoksi" style="color: black; text-decoration: none; text-align:left">TUPOKSI PROGRAM JASA KONSTRUKSI</a>
                    {{-- <a href="/404" style="color: black; text-decoration: none; text-align:left">TUPOKSI PROGRAM JASA KONSTRUKSI</a> --}}
                </div>
            </div>
        </div>
        
        

        {{-- DASHBOARD MENU SIPJAKI KABUPATEN BLORA  --}}
        {{-- <div class="dropdown">
            <a href="#" class="dropdown-toggle">PROFIL</a>
            <div class="dropdown-content" style="min-width: 400px;">
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-building" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/profil/struktur" style="color: black; text-decoration: none; text-align:left">STRUKTUR DINAS PEKERJAAN UMUM DAN PENATAAN RUANG PEMERINTAH KABUPATEN BANDUNG BARAT</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-tasks" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/profil/rencanastrategis" style="color: black; text-decoration: none; text-align:left">RENSTRA PROGRAM DAN JASA KONSTRUKSI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-clipboard-list" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/profil/tupoksi" style="color: black; text-decoration: none; text-align:left">TUPOKSI PROGRAM DAN JASA KONSTRUKSI</a>
                </div>
               
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-clipboard-list" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/berita" style="color: black; text-decoration: none; text-align:left">BERITA JASA KONSTRUKSI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-clipboard-list" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/kegiatansertifikasi" style="color: black; text-decoration: none; text-align:left">DOKUMENTASI SERTIFIKASI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-clipboard-list" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/feagendasertifikasi" style="color: black; text-decoration: none; text-align:left">AGENDA SERTIFIKASI</a>
                </div>


            </div>
            
        </div>                     --}}
        
        
        
        {{-- <a href="#">PROFIL</a> --}}
        
        <div class="dropdown">
            <a href="#" class="dropdown-toggle">BERITA</a>
           
            <div class="dropdown-content" style="min-width: 280px;">
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-bullhorn" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/berita" style="color: black; text-decoration: none; text-align:left">BERITA JASA KONSTRUKSI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-certificate" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/kegiatansertifikasi" style="color: black; text-decoration: none; text-align:left">DOKUMENTASI SERTIFIKASI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-calendar-alt" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    {{-- <a href="/feagendasertifikasi" style="color: black; text-decoration: none; text-align:left">AGENDA SERTIFIKASI</a> --}}
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">AGENDA SERTIFIKASI</a>
                </div>
            </div>
            
        </div>                    
        
        <div class="dropdown">
            <a href="#" class="dropdown-toggle" style="text-align: left">DATA JAKON </a>
            {{-- <i class="fas fa-chevron-down arrow"></i> --}}
            <div class="dropdown-content" style="min-width: 320px;">
                {{-- <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-eye" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/datajakon/pengawasan" style="color: black; text-decoration: none; text-align:left">PENGAWASAN DAN KETERTIBAN</a>
                </div>
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/datajakon/asosiasi" style="color: black; text-decoration: none; text-align:left">ASOSIASI PENGUSAHA</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-money-bill-wave" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/datajakon/standarbiayaumum" style="color: black; text-decoration: none; text-align:left">STANDAR BIAYA UMUM</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-tasks" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/datajakon/paketpekerjaan" style="color: black; text-decoration: none; text-align:left">PROGRESS PAKET PEKERJAAN</a>
                </div>
                 --}}
                 <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-hard-hat" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">BUJK KONTRAKTOR</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-pencil-alt" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">BUJK KONSULTAN</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">TENAGA KERJA</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-building" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">ASOSIASI KONSTRUKSI</a>
                </div>
                

            </div>
        </div>                    {{-- <a href="#">PROFIL</a> --}}

        <div class="dropdown">
            <a href="#" class="dropdown-toggle" style="text-align: left">PEMBINAAN</a>
            <div class="dropdown-content" style="min-width: 320px;">
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-chalkboard-teacher" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">PELATIHAN </a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-cogs" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">BIMBINGAN TEKNIS</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-id-badge" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">SKK TENAGA AHLI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-wrench" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">WORKSHOP</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-list-alt" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">DAFTAR TENAGA AHLI</a>
                </div>
                
            </div>
        </div>

        <div class="dropdown">
            <a href="#" class="dropdown-toggle" style="text-align: left">PENGAWASAN</a>
            <div class="dropdown-content" style="min-width: 320px;">
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-shield-alt" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">PENGAWASAN BUJK</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-exclamation-triangle" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">KECELAKAAN KERJA</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-balance-scale" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color:white;"></i>
                    <a href="/blora/tertibjakon" style="color: black; text-decoration: none; text-align:left">TERTIB JASA KONSTRUKSI</a>
                </div>
                        
                
            </div>
        </div>                    

        <div class="dropdown">
            <a href="#" class="dropdown-toggle" style="text-align: left">RANTAI PASOK</a>
            <div class="dropdown-content" style="min-width: 320px;">
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-cogs" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">MATERIAL BANGUNAN GEDUNG</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-tools" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">PERALATAN KONSTRUKSI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-store" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">TOKO BANGUNAN KAB BLORA</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-truck" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">DISTRIBUTOR KAB BLORA</a>
                </div>
                
                
            </div>
        </div>            

        <div class="dropdown">
            <a href="#" class="dropdown-toggle" style="text-align: left">AHSP</a>
            <div class="dropdown-content" style="min-width: 320px;">
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-tags" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">HARGA SATUAN DASAR</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-clipboard-list" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">HSP KONSTRUKSI UMUM</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-tools" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">SHST KONSTRUKSI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-list-alt" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">DAFTAR MATERIAL</a>
                </div>
                
                
            </div>
        </div>                    
        
        {{-- <a href="#">PROFIL</a> --}}
{{--     
        <div class="dropdown">
            <a href="#" class="dropdown-toggle" style="text-align: left">TENAGA KERJA </a>
            <div class="dropdown-content" style="min-width: 350px;">
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-certificate" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/tenagakerja/skaskt" style="color: black; text-decoration: none; text-align:left">SERTIFIKAT KETERAMPILAN KERJA</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-user-check" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/tenagakerja/pjt" style="color: black; text-decoration: none; text-align:left">PENANGGUNG JAWAB TEKNIS (PJT)</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users-cog" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/tenagakerja/timpembina" style="color: black; text-decoration: none; text-align:left">PEMBINA JASA KONSTRUKSI</a>
                </div>
            </div>
            
        </div>                     --}}
        
        {{-- <a href="#">PROFIL</a> --}}
        
    
        {{-- <div class="dropdown">
            <a href="#" class="dropdown-toggle" style="text-align: left">SPM</a>
            <div class="dropdown-content" style="min-width: 210px;">
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-info-circle" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/spm/informasispm" style="color: black; text-decoration: none; text-align:left">INFORMASI SPM</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-chart-line" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">LAPORAN SPM</a>
                </div>
            </div>
        </div>                     --}}
        {{-- <a href="#">PROFIL</a> --}}
        
        {{-- <div class="dropdown">
            <a href="#" class="dropdown-toggle" style="text-align: left">DUKUNGAN <br> USAHA </a> --}}
            {{-- <i class="fas fa-chevron-down arrow"></i> --}}
            {{-- <div class="dropdown-content" style="min-width: 210px;">
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">PERMODALAN</a>
                </div>
                 
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">JAMINAN USAHA</a>
                </div>
                 
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">MITRA USAHA</a>
                </div>
                 
            </div>
        </div> --}}
                            {{-- <a href="#">PROFIL</a> --}}
    
        {{-- <a href="/404" style="text-align: center">BADAN <br> USAHA </a> --}}

        {{-- INFORMASI KBB --}}
        {{-- <a href="/ijinusahajasakonstruksi">SBU/IUJK</a> --}}
        {{-- <a href="/tdup">TDUP</a> --}}
        
        
        {{-- <div class="dropdown">
            <a href="#" class="dropdown-toggle" style="text-align: left">PELATIHAN</a>
            <div class="dropdown-content" style="min-width: 210px;">
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-chalkboard-teacher" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">SERTIFIKASI </a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-eye" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">BIMBINGAN TEKNIS</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-eye" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">PELATIHAN</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-exclamation-triangle" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green);"></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">WORKSHOP</a>
                </div>
                

            </div>
        </div>
         --}}

        <div class="dropdown">
            <a href="#" class="dropdown-toggle" style="text-align: left">PERATURAN</a>
            {{-- <i class="fas fa-chevron-down arrow"></i> --}}
            <div class="dropdown-content" style="min-width: 250px;">
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-gavel" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/peraturan/undangundang" style="color: black; text-decoration: none; text-align:left">UNDANG UNDANG</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-scroll" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/peraturan/pemerintah" style="color: black; text-decoration: none; text-align:left">PERATURAN PEMERINTAH</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-scroll" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/peraturan/presiden" style="color: black; text-decoration: none; text-align:left">PERATURAN PRESIDEN</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-scroll" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/peraturan/menteri" style="color: black; text-decoration: none; text-align:left">PERATURAN MENTERI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-scroll" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/peraturan/keputusanmenteri" style="color: black; text-decoration: none; text-align:left">KEPUTUSAN MENTERI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-scroll" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/peraturan/suratedaranmenteri" style="color: black; text-decoration: none; text-align:left">SURAT EDARAN MENTERI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-book" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/peraturan/referensi" style="color: black; text-decoration: none; text-align:left">REFERENSI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-landmark" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/peraturan/daerah" style="color: black; text-decoration: none; text-align:left">PERATURAN DAERAH</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-landmark" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/peraturan/gubernur" style="color: black; text-decoration: none; text-align:left">PERATURAN GUBERNUR</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-landmark" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/peraturan/walikotadanbupati" style="color: black; text-decoration: none; text-align:left">PERATURAN WALIKOTA/ BUPATI</a>
                </div>
                
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-file-signature" style="margin-left: 3px; margin-right: 10px; background: linear-gradient(90deg, black, green); color: white;"></i>
                    <a href="/peraturan/suratkeputusan" style="color: black; text-decoration: none; text-align:left">SURAT KEPUTUSAN</a>
                </div>
                
            </div>
            
        </div>                    {{-- <a href="#">PROFIL</a> --}}
        
        
        <a href="/login">LOGIN</a>
       
    
    </nav>
</div>