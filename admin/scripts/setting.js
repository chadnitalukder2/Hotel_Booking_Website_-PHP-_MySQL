
    let general_data , contacts_data;
    let general_s_form = document.getElementById('general_s_form');
    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');

    //----------------------Management Team update-------
    let team_s_form = document.getElementById('team_s_form');
    let member_name_inp = document.getElementById('member_name_inp');
    let member_picture_inp = document.getElementById('member_picture_inp');


    //----------------------contact update----
    let contacts_s_form = document.getElementById('contacts_s_form');
    // =================================get general part==============================================================
    function get_general(){
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');

        let shutdown_toggle = document.getElementById('shutdown_toggle');
        
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload= function(){
            general_data = JSON.parse(this.responseText);
            
            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;
        
            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;
    
            if(general_data.shutdown == 0){
                shutdown_toggle.checked = false;
                shutdown_toggle.value = 0;
            }
            else{
                shutdown_toggle.checked = true;
                shutdown_toggle.value = 1;
            }
        }

        xhr.send('get_general');
    }
    // -----------------------------------------------------------------
        general_s_form.addEventListener('submit', function(e){
        e.preventDefault();
        upd_general(site_title_inp.value,site_about_inp.value)
    });
    // -------------------------update general------------------------------------------
    function upd_general(site_title_val,site_about_val){
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload= function(){

            var myModal = document.getElementById('General-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if(this.responseText == 1){
               alert('success', 'Changes saved!');
               get_general();
            }
            else{
                alert('error', 'No Changes made!');
            }
        }

        xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
    }
    // --------------------------upd_shutdown---------------------------------------
    function upd_shutdown(val){
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            if(this.responseText == 1 && general_data.shutdown == 0){
               alert('success', 'Site has been shutdown!');
            }
            else{
                alert('success', 'Shutdown mode off!');
            }
            get_general();
        }
        console.log(val, "hi", +val);

       xhr.send('upd_shutdown='+val );
    }

    // =================================Contact part==============================================================
    function get_contacts(){
       let contacts_p_id = ['address', 'gmap', 'ph1', 'ph2', 'email', 'fb', 'insta', 'tw'];
       let iframe = document.getElementById('iframe');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload= function(){
           contacts_data =JSON.parse( this.responseText);
           //console.log(contacts_data);
           contacts_data = Object.values(contacts_data);

           for(i=0; i < contacts_p_id.length; i++){
                document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1]; 
           }
           iframe.src = contacts_data[9];
           contacts_inp(contacts_data);
        }

        xhr.send('get_contacts');
    }
    //----------------------------------get data------------------------
    function contacts_inp(data){
        let contacts_inp_id = ['address_inp', 'gmap_inp', 'ph1_inp', 'ph2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

        for(i = 0; i < contacts_inp_id.length; i++){
            document.getElementById(contacts_inp_id[i]).value = data[i+1];
        }
    }
    //----------------------contact update-----------
    contacts_s_form.addEventListener('submit',function(e) {
        e.preventDefault();
        upd_contats();
    });
    //--------------------update function------------
    function upd_contats(){
        let index =  ['address', 'gmap', 'ph1', 'ph2', 'email', 'fb', 'insta', 'tw', 'iframe'];
        let contacts_inp_id = ['address_inp', 'gmap_inp', 'ph1_inp', 'ph2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

        let data_str= "";

        for(i=0; i < index.length; i++){
            data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
        }
        //console.log(data_str);
        data_str += "upd_contacts";

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            var myModal = document.getElementById('contact-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if(this.responseText == 1 ){
               alert('success', 'Change saved!');
               get_contacts();
            }
            else{
                alert('error', 'No changes made!');
            }
        }

        xhr.send(data_str);
    }
    //===========================Management Team ============================================
    team_s_form.addEventListener('submit', function(e){
        e.preventDefault()
        add_member();
    });
    //----------------------------------Add data------------------------
    function add_member(){
        let data = new FormData();
        data.append('name',member_name_inp.value );
        data.append('picture',member_picture_inp.files[0]);
        data.append('add_member', '');
        //--------------------------update code-----------------
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
       
        xhr.onload= function(){
            var myModal = document.getElementById('Team-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();
        
            if(this.responseText == 'inv_img'){
                alert('error', 'only jpg and png images are allowes!');
            }
            else if(this.responseText == 'inv_size'){
                alert('error', 'Image should be less than 2MB!');
            }
            else if(this.responseText == 'upd_failed'){
                alert('error', 'Image upload failed. Server down!');
            }
            else{
                alert('success', 'New member added!');
                member_name_inp.value = '';
                member_picture_inp.value = '';
                get_members();
            }

        }

        xhr.send(data);
    }
    //----------------------------------get members------------------------
    function get_members(){
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload= function(){
            document.getElementById('team-data').innerHTML = this.responseText;
        }

        xhr.send('get_members');
    }
    //----------------------------------delete members------------------------
    function rem_member(val){
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload= function(){
            if(this.responseText == 1){
                alert('success', 'Member removed!');
            }
            else{
                alert('error', 'Server down!');
            }
        }

        xhr.send('rem_member='+val);
    }

    // ===============================================================================================
    window.onload = function(){
        get_general();
        get_contacts();
        get_members();
    }

