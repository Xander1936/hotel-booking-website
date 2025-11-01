
    let general_data, contacts_data;

    let general_s_form = document.getElementById('general_s_form');
    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');

    let contacts_s_form = document.getElementById('contacts_s_form');

    let team_s_form = document.getElementById('team_s_form');
    let member_name_inp = document.getElementById('member_name_inp');
    let member_picture_inp = document.getElementById('member_picture_inp');

    function get_general(){
        const site_title = document.getElementById('site_title');
        const site_about = document.getElementById('site_about');
        const shutdown_toggle = document.getElementById('shutdown-toggle');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            general_data = JSON.parse(this.responseText);

            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;

            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;

            shutdown_toggle.checked = general_data.shutdown == 1;
        };

        xhr.send('get_general');
    }

    general_s_form.addEventListener('submit', function(e){
        e.preventDefault();
        upd_general(site_title_inp.value, site_about_inp.value);
    });

    function upd_general(site_title_val, site_about_val){
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            const myModal = document.getElementById('general-s');
            const modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if(this.responseText == 1){
                alert('success', 'Changes saved!');
                get_general();
            } else {
                alert('error', 'No Changes made!');
            }
        };

        xhr.send('site_title=' + encodeURIComponent(site_title_val) + '&site_about=' + encodeURIComponent(site_about_val) + '&upd_general');
    }

    // Piste à explorer: function upd_shutdown(Val)

    function upd_shutdown(isChecked){
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            if(this.responseText == 1 && general_data.shutdown == 0){
                alert('success', 'Shutdown mode On!');
            } else {
                alert('error', 'Shutdown mode Off!');
            }
        };
        
        xhr.send('upd_shutdown=' + (isChecked ? 1 : 0));
        get_general();
    }

    function get_contacts(){
        let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw']; 
        let iframe = document.getElementById('iframe');
        
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            contacts_data = JSON.parse(this.responseText);
            contacts_data = Object.values(contacts_data);
            console.log(contacts_data);
            
            for(i = 0; i < contacts_p_id.length; i++){
                document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
            } 
            iframe.src = contacts_data[9];
            contacts_inp(contacts_data);
        };

        xhr.send('get_contacts');
    }

    function contacts_inp(data){
        let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];
        for(i=0; i<contacts_inp_id.length; i++){
            document.getElementById(contacts_inp_id[i]).value = data[i+1];
        }
    }

    contacts_s_form.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission
        upd_contacts(); // Call the function to update contacts
    });

    function upd_contacts() {
        let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe'];
        let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];
        let data_str = "";

        for (let i = 0; i < index.length; i++) {
            data_str += index[i] + "=" + encodeURIComponent(document.getElementById(contacts_inp_id[i]).value) + '&';
        }
        data_str += "upd_contacts";

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            const myModal = document.getElementById('contacts-s');
            const modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            // Improved error handling
            if (this.responseText === '1') {
                alert('success', 'Changes saved!');
                get_contacts(); // Refresh contacts data
            } else if (this.responseText === '0') {
                alert('error', 'No changes made!');
            } else {
                alert('error', 'An unexpected error occurred. Please try again.');
            }
        };
        xhr.send(data_str);
    }

    function resetGeneralSettings() {
        site_title_inp.value = general_data.site_title;
        site_about_inp.value = general_data.site_about;
    }

    team_s_form.addEventListener('submit', function(e){
        e.preventDefault();
        add_member();
    });

    function add_member(){
        let data = new FormData();
        data.append('name', member_name_inp.value);
        data.append('picture', member_picture_inp.files[0]);
        data.append('add_member','');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            // console.log(this.responseText);
            var myModal = document.getElementById('team-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if (this.responseText == 'inv_img'){
                alert('error', 'Only JPG, PNG and WEBP images are allowed!');
            }
            else if(this.responseText == 'inv_size'){
                alert('error', 'Image size should be less than 2MB!');
            }
            else if(this.responseText == 'upd_failed'){
                alert('error', 'Image upload failed. Server Down! Try again!');
            }
            else{
                alert('success', 'New member added!');
                member_name_inp.value = '';
                member_picture_inp.value = '';
                get_members();
                get_team();
            }

        };

        xhr.send(data); 
    }

    function get_members(){
        const site_title = document.getElementById('site_title');
        const site_about = document.getElementById('site_about');
        const shutdown_toggle = document.getElementById('shutdown-toggle');

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            document.getElementById('team-data').innerHTML = this.responseText;
        };

        xhr.send('get_members');
    }

    function rem_member(val){
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){

            if(this.responseText == 1){
                alert('success', 'Member removed!');
                get_members();
            }else{
                alert('error', 'Server down! Try again later.');
            }
        };

        xhr.send('rem_member='+val);
    }

    window.onload = function(){
        get_general();
        get_contacts();
        get_members();
    }