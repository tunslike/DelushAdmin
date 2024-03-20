//function to show alert
function showErrorAlert(message) {
    Swal.fire({
        text: message,
        icon: "error",
        buttonsStyling: false,
        confirmButtonText: "Ok, got it!",
        customClass: {
            confirmButton: "btn btn-danger"
        }
    });
}
//end of function 

//function to validate workflow policy
function ValidatePolicy(value) {
    if(value == 'APPR1') {
        $('#approval_two').hide();
    }else if(value == 'APPR2') {
        $('#approval_one').show();
        $('#approval_two').show();
    }else if(value == 'SYSM') {
        $('#approval_one').hide();
        $('#approval_two').hide();
    }
}
//end of function

// function to show manage menu function
function showManageMenuModal(menuID) {
    

      // Show page loading
      KTApp.showPageLoading();

      //ajax request
         $.ajax({
             type: "POST",
             data: { menuid: menuID},
             url: "http://localhost/delushadmin/dashboard/loadMenuDetails",
             success: function (data) {

                 //hide
                 KTApp.hidePageLoading();

                 let menu = JSON.parse(data);

                 $('#menuID').val(menu.FOOD_MENU_ID)
                 $('#mn_foodCategory').val(menu.CATEGORY_ID)
                 $('#mn_foodName').val(menu.FOOD_NAME)
                 $('#mn_foodDesc').val(menu.DESCRIPTION)
                 $('#mn_foodAmount').val(menu.AMOUNT)
                 $('#mn_foodQuant').val(menu.QUANTITY)

                 if(menu.FOOD_MENU_IMG != '') {
                    $('#nofoodPicture').hide()
                    $('#currentImg').attr("src", menu.FOOD_MENU_IMG)
                    $('#currentImgBox').show()
                 }else {
                    $('#currentImgBox').hide()
                    $('#nofoodPicture').show()
                 }
                
        
                 //show modal
                 $('#manage_food_menu').modal('show');
             
             },
         });

}
// end of function

//function to load modal
function showOrderModalBox(orderNoID, customerNo) {

    $('#custNo').html(customerNo)
    $('#orderID').val(orderNoID);

      // Show page loading
      KTApp.showPageLoading();

      //ajax request
         $.ajax({
             type: "POST",
             data: {orderID:orderNoID},
             url: "http://localhost/delushadmin/dashboard/loadOrderItems",
             success: function (data) {

                 //hide
                 KTApp.hidePageLoading();

                 let orders = JSON.parse(data);

                 var rowData = '';
                 var fullname = '';
                 var totalAmount = '';
                 var phoneNumber = '';
                 var rowDataHeader ='<div class="card" style="padding:10px;">'  +
                                    '<div class="table-responsive">' +
                                     '<table class="table align-middle table-row-dashed fs-6 gy-4 mb-0">' +
                                     '<thead>' +
                                    '<tr class="border-bottom border-gray-200 text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">' +
                                    '<th class="min-w-50px">#</th>' +
                                    '<th class="min-w-150px">Menu</th>' +
                                    '<th class="min-w-125px">Bulk Order</th>' +
                                    '<th class="min-w-60px">Qty</th>' +
                                    '<th class="min-w-125px">Total</th>' +
                                    '</tr>' +
                                    '</thead>' +
                                    '<tbody class="fw-semibold text-gray-800">';

                 var rowDataFooter = '</tbody></table></div>';
                 let x = 1;

                 for(var i = 0; i < orders.length; i++) {

                    fullname = orders[i].CUSTOMER_NAME;
                    totalAmount = orders[i].TOTAL_AMOUNT;
                    phoneNumber = orders[i].PHONE;

                    rowData += '<tr>' +
                                '<td>'+x+'</td>' +
                                '<td><label class="w-150px">'+ orders[i].FOOD_NAME +'</label></td>' +
                                '<td><span class="badge badge-light-danger">'+ orders[i].BULK_ORDER +'</span></td>' +
                                '<td>' + orders[i].QUANTITY + '</td>' +
                                '<td><span class="badge badge-light-primary">₦' + orders[i].AMOUNT + '</span></td>' +
                                '</tr>';
                    x++;
                 }

                 var tableRowData = rowDataHeader + rowData + rowDataFooter;
                 
                 $('#rowDataValue').html(tableRowData)
                 $('#customerName').val(fullname)
                 $('#phoneNumber').val(phoneNumber)
                 $('#totalAmount').val(totalAmount)
 
             },
         });


    $('#customer_order_modal').modal('show');

}// end of function 

//function to load modal
function showOrderSuccessModalBox(orderNoID, customerNo, orderStatus) {

    $('#custNo').html(customerNo)
    $('#orderID').val(orderNoID);

      // Show page loading
      KTApp.showPageLoading();

      //ajax request
         $.ajax({
             type: "POST",
             data: {orderID:orderNoID},
             url: "http://localhost/delushadmin/dashboard/fetchCustomerCompletedOrder",
             success: function (data) {

                 //hide
                 KTApp.hidePageLoading();

                 let orders = JSON.parse(data);

                 var rowData = '';
                 var fullname = '';
                 var totalAmount = '';
                 var phoneNumber = '';
                 var comment = '';
                 var processby = '';
                 var dateProcessed = '';


                 var rowDataHeader ='<div class="card" style="padding:10px;">'  +
                                    '<div class="table-responsive">' +
                                     '<table class="table align-middle table-row-dashed fs-6 gy-4 mb-0">' +
                                     '<thead>' +
                                    '<tr class="border-bottom border-gray-200 text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">' +
                                    '<th class="min-w-50px">#</th>' +
                                    '<th class="min-w-150px">Menu</th>' +
                                    '<th class="min-w-125px">Bulk Order</th>' +
                                    '<th class="min-w-60px">Qty</th>' +
                                    '<th class="min-w-125px">Total</th>' +
                                    '</tr>' +
                                    '</thead>' +
                                    '<tbody class="fw-semibold text-gray-800">';

                 var rowDataFooter = '</tbody></table></div>';
                 let x = 1;

                 for(var i = 0; i < orders.length; i++) {

                    fullname = orders[i].CUSTOMER_NAME;
                    totalAmount = orders[i].TOTAL_AMOUNT;
                    phoneNumber = orders[i].PHONE;
                    comment = orders[i].COMMENT;
                    dateProcessed = orders[i].DATE_PROCESSED;
                    processby = orders[i].PROCESSED_BY;

                    rowData += '<tr>' +
                                '<td>'+x+'</td>' +
                                '<td><label class="w-150px">'+ orders[i].FOOD_NAME +'</label></td>' +
                                '<td><span class="badge badge-light-danger">'+ orders[i].BULK_ORDER +'</span></td>' +
                                '<td>' + orders[i].QUANTITY + '</td>' +
                                '<td><span class="badge badge-light-primary">₦' + orders[i].AMOUNT + '</span></td>' +
                                '</tr>';
                    x++;
                 }

                 var tableRowData = rowDataHeader + rowData + rowDataFooter;

                 $('#rowDataValueCompleted').html(tableRowData)

                 $('#c_customerName').val(fullname)
                 $('#c_phoneNumber').val(phoneNumber)
                 $('#c_totalAmount').val(totalAmount)
                 $('#c_orderComment').val(comment)
                 $('#dateProcessed').val(dateProcessed)
                 $('#processedBy').val(processby)

                
 
             },

         });


    $('#view_completed_order').modal('show');

}// end of function 

//function to complete customer order
$('#btnCompleteCustomerOrder').click(function () {

    var button = document.querySelector("#btnCompleteCustomerOrder");
    
    //get details
    let orderid = $('#orderID').val()
    let deliveryName = $('#deliveryName').val()
    let deliverphone = $('#deliveryPhone').val()
    let comment = $('#orderComment').val()

    if(orderid == '') {
        showErrorAlert('Invalid Order ID, please try again!')
        return false;
    }

    if(deliveryName == '' || deliverphone == '') {
        showErrorAlert('Please provide delivery contact name and phone number!')
        return false;
    }
    
     // show prompt
     Swal.fire({
        text: "Do you want to complete customer order?",
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes, Proceed!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            cancelButton: 'btn btn-danger',
            confirmButton: "btn btn-primary"
        }
    }).then((result) => {
        if (result.isConfirmed) {

        // Show page loading
        KTApp.showPageLoading();

        // Activate indicator
        button.setAttribute("data-kt-indicator", "on");

         //ajax request
            $.ajax({
                type: "POST",
                data: { orderID: orderid, comment:comment, delName: deliveryName, delPhone: deliverphone},
                url: "http://localhost/delushadmin/dashboard/completeCustomerOrder",
                success: function (data) {

                    //hide
                    KTApp.hidePageLoading();
                    button.removeAttribute("data-kt-indicator");

                    //check data
                    if(data == 1) {

                        //clear data
                        $('#customerName').val('')
                        $('#phoneNumber').val('')
                        $('#totalAmount').val('')
                        $('#orderComment').val('')

                        Swal.fire({
                            title: "Complete Customer Order!",
                            text: "Customer order completed successfully!",
                            icon: "success"
                          });

                          $('#customer_order_modal').modal('hide');

                    }else {

                        // clear fields
                        $('#customerName').val('')
                        $('#phoneNumber').val('')
                        $('#totalAmount').val('')
                        $('#orderComment').val('')

                        Swal.fire({
                            title: "Complete Customer Order!",
                            text: "Unable to process your request, please retry!",
                            icon: "error"
                          });

                          $('#customer_order_modal').modal('hide');
                    }
    
                },
            });
        }
      });
    
        
})
//end of function

function createUsername() {
    var firstname = $('#user_firstname').val()
    var lastname = $('#user_lastname').val()

    if(firstname.trim() != '' || lastname.trim() != '') {
        var fullname = firstname + lastname.charAt(0);
        $('#username').val(fullname.toLowerCase())
    }
}

//function to create new food category
$('#btnCreateNewUser').click(function () {
    
    //get details
    let user_firstname = $('#user_firstname').val()
    let user_lastname = $('#user_lastname').val()
    let user_role = $('#username').val()
    let user_phone = $('#user_phone').val()
    let user_email = $('#user_email').val()

    if(user_firstname == '' || user_lastname == '' || user_role == '') {
        showErrorAlert('Please enter all fields!')
        return false;
    }
    
     // show prompt
     Swal.fire({
        text: "Do you want to create user?",
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes, Proceed!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            cancelButton: 'btn btn-danger',
            confirmButton: "btn btn-primary"
        }
    }).then((result) => {
        if (result.isConfirmed) {

        // Show page loading
        KTApp.showPageLoading();

         //ajax request
            $.ajax({
                type: "POST",
                data: { userFirstname: user_firstname, userLastname:user_lastname,userRole: user_role, userPhone: user_phone, userEmail:user_email},
                url: "http://localhost/delushadmin/account/createNewUser",
                success: function (data) {

                    //hide
                    KTApp.hidePageLoading();

                    //check data
                    if(data == 1) {

                        //clear data
                        $('#user_firstname').val('')
                        $('#user_lastname').val('')
                        $('#username').val('')
                        $('#user_phone').val('')
                        $('#user_email').val('')

                        $('#create_new_user').modal('hide');

                        Swal.fire({
                            title: "Create New User!",
                            text: "User created successfully!",
                            icon: "success"
                          });

                    }else {

                        //clear data
                        $('#user_firstname').val('')
                        $('#user_lastname').val('')
                        $('#username').val('')
                        $('#user_phone').val('')
                        $('#user_email').val('')

                        $('#create_new_user').modal('hide');

                        Swal.fire({
                            title: "Create New User",
                            text: "Unable to process your request, please retry!",
                            icon: "error"
                          });
                    }
    
                },
            });
        }
      });
    
})
//end of function


//function to create new food category
$('#btnCreateFoodItem').click(function () {
    
    //get details
    let foodName = $('#foodName').val()
    let foodCategory = $('#foodCategory').val()
    let foodDesc = $('#foodDesc').val()
    let foodAmount = $('#foodAmount').val()
    let foodQuant = $('#foodQuant').val()
    let picFile = $('#foodPicture').val()

    if(foodName == '' || foodCategory == '' || foodDesc == '' || foodAmount == '' || foodQuant == '') {
        showErrorAlert('Please enter all fields!')
        return false;
    }

    if(picFile == '') {
        showErrorAlert('Please upload a picture for the food menu!')
        return false;
    }

    var property = document.getElementById('foodPicture').files[0];
    var image_name = property.name;
    var image_extension = image_name.split('.').pop().toLowerCase();
   
    if(jQuery.inArray(image_extension,['jpg','jpeg','png', '']) == -1){
        showErrorAlert('Invalid image file!')
        return false;
    }

    // prepare form data
    var form_data = new FormData();

    //fields
    form_data.append("foodCategory", foodCategory)
    form_data.append("foodName", foodName)
    form_data.append("foodDesc", foodDesc)
    form_data.append("foodAmount", foodAmount)
    form_data.append("foodQuant", foodQuant)
    form_data.append("file",property);
    
     // show prompt
     Swal.fire({
        text: "Do you want to create food menu?",
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes, Proceed!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            cancelButton: 'btn btn-danger',
            confirmButton: "btn btn-primary"
        }
    }).then((result) => {
        if (result.isConfirmed) {

        // Show page loading
        KTApp.showPageLoading();

         //ajax request
            $.ajax({
                type: "POST",
                data: form_data,
                contentType: false,
                processData: false,
                cache: false,
                url: "http://localhost/delushadmin/dashboard/createFoodMenu",
                success: function (data) {

                    //hide
                    KTApp.hidePageLoading();

                    //check data
                    if(data == 1) {

                        //clear data
                        $('#foodName').val('')
                        $('#foodCategory').val('')
                        $('#foodDesc').val('')
                        $('#foodAmount').val('')
                        $('#foodQuant').val('')

                        Swal.fire({
                            title: "Create Food Menu!",
                            text: "Food menu created successfully!",
                            icon: "success"
                          });

                    }else {

                         //clear data
                         $('#foodName').val('')
                         $('#foodCategory').val('')
                         $('#foodDesc').val('')
                         $('#foodAmount').val('')
                         $('#foodQuant').val('')

                        Swal.fire({
                            title: "Create Food Menu",
                            text: "Unable to process your request, please retry!",
                            icon: "error"
                          });
                    }
    
                },
            });
        }
      });
    
        
})
//end of function

// function to disable food menu
function disableFoodMenu(foodMenuID) {

    if(foodMenuID == '') {
        return false;
    }

    // show prompt
    Swal.fire({
        title: "Disable Food Menu in Store?",
        text: "Food menu will no longer be available in store!",
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Proceed!",
        cancelButtonText: 'Cancel',
        customClass: {
            cancelButton: 'btn btn-danger',
            confirmButton: "btn btn-primary"
        }
    }).then((result) => {
        if (result.isConfirmed) {

        // Show page loading
        KTApp.showPageLoading();

         //ajax request
            $.ajax({
                type: "POST",
                data: { menu_food_id: foodMenuID},
                url: "http://localhost/delushadmin/dashboard/disableFoodMenu",
                success: function (data) {

                    //hide
                    KTApp.hidePageLoading();

                    //check data
                    if(data == 1) {

                        //hide modal
                        $('#manage_food_menu').modal('hide');

                        //clear data
                        $('#mn_foodName').val('')
                        $('#mn_foodCategory').val('')
                        $('#mn_foodDesc').val('')
                        $('#mn_foodAmount').val('')
                        $('#mn_foodQuant').val('')

                        Swal.fire({
                            title: "Disable Food Menu!",
                            text: "Food menu disabled successfully!",
                            icon: "success"
                          });

                    }else {

                        //hide
                        $('#manage_food_menu').modal('hide');

                        //clear data
                        $('#mn_foodName').val('')
                        $('#mn_foodCategory').val('')
                        $('#mn_foodDesc').val('')
                        $('#mn_foodAmount').val('')
                        $('#mn_foodQuant').val('')

                        Swal.fire({
                            title: "Disable Food Menu!",
                            text: "Unable to process your request, please retry!",
                            icon: "error"
                          });
                    }
    
                },
            });
        }
      });

}
// end of function


//function to create new food category
$('#btnUpdateFoodMenu').click(function () {
    
    //get details
    let menuID = $('#menuID').val()
    let foodName = $('#mn_foodName').val()
    let foodCategory = $('#mn_foodCategory').val()
    let foodDesc = $('#mn_foodDesc').val()
    let foodAmount = $('#mn_foodAmount').val()
    let foodQuant = $('#mn_foodQuant').val()
    let picFile = $('#mn_foodPicture').val()

    if($('#disableMenu').is(":checked")){
        disableFoodMenu(menuID);
        return false;
    }

    if(foodName == '' || foodCategory == '' || foodDesc == '' || foodAmount == '' || foodQuant == '') {
        showErrorAlert('Please enter all fields!')
        return false;
    }

    if(picFile == '') {
        showErrorAlert('Please upload a picture for the food menu!')
        return false;
    }

    var property = document.getElementById('mn_foodPicture').files[0];
    var image_name = property.name;
    var image_extension = image_name.split('.').pop().toLowerCase();
   
    if(jQuery.inArray(image_extension,['jpg','jpeg','png', '']) == -1){
        showErrorAlert('Invalid image file!')
        return false;
    }

    // prepare form data
    var form_data = new FormData();

    //fields
    form_data.append("foodMenuid", menuID)
    form_data.append("foodCategory", foodCategory)
    form_data.append("foodName", foodName)
    form_data.append("foodDesc", foodDesc)
    form_data.append("foodAmount", foodAmount)
    form_data.append("foodQuant", foodQuant)
    form_data.append("file",property);
    
     // show prompt
     Swal.fire({
        title: "Update Food Menu",
        text: "Do you want to update food menu?",
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes, Proceed!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            cancelButton: 'btn btn-danger',
            confirmButton: "btn btn-primary"
        }
    }).then((result) => {
        if (result.isConfirmed) {

        // Show page loading
        KTApp.showPageLoading();

         //ajax request
            $.ajax({
                type: "POST",
                data: form_data,
                contentType: false,
                processData: false,
                cache: false,
                url: "http://localhost/delushadmin/dashboard/updateFoodMenu",
                success: function (data) {

                    //hide
                    KTApp.hidePageLoading();

                    //check data
                    if(data == 1) {

                          //show modal
                        $('#manage_food_menu').modal('hide');

                        //clear data
                        $('#mn_foodName').val('')
                        $('#mn_foodCategory').val('')
                        $('#mn_foodDesc').val('')
                        $('#mn_foodAmount').val('')
                        $('#mn_foodQuant').val('')

                        Swal.fire({
                            title: "Update Food Menu!",
                            text: "Food menu updated successfully!",
                            icon: "success"
                          });

                    }else {

                          //show modal
                          $('#manage_food_menu').modal('hide')

                         //clear data
                         $('#mn_foodName').val('')
                         $('#mn_foodCategory').val('')
                         $('#mn_foodDesc').val('')
                         $('#mn_foodAmount').val('')
                         $('#mn_foodQuant').val('')

                        Swal.fire({
                            title: "Update Food Menu",
                            text: "Unable to process your request, please retry!",
                            icon: "error"
                          });
                    }
    
                },
            });
        }
      });
    
        
})
//end of function



//function to approve customer profile
$('#btnApproveCustomerLoan').click(function () {
    
    //get details
    let comment = $('#txtComment').val()
    let profID = $('#proileid').val()

    if(profID == '') {
        showErrorAlert('Please select customer loan profile to proceed!')
        return false;
    }

     // show prompt
     Swal.fire({
        text: "Do you want to approve customer loan request?",
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes, Proceed!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            cancelButton: 'btn btn-danger',
            confirmButton: "btn btn-primary"
        }
    }).then((result) => {
        if (result.isConfirmed) {

        // Show page loading
        KTApp.showPageLoading();

         //ajax request
            $.ajax({
                type: "POST",
                data: { profileid: profID, comment:comment},
                url: "http://localhost/lamsuite/loan/approveCustomerLoanRequest",
                success: function (data) {

                    //hide
                    KTApp.hidePageLoading();

                    //check data
                    if(data == 1) {

                        Swal.fire({
                            title: "Company Profile Approved!",
                            text: "Record has been approved successully!",
                            icon: "success"
                          });

                          // refresh
                          location.reload();

                    }else {

                        Swal.fire({
                            title: "Unable to approve company profile!",
                            text: "Unable to process your request, please retry!",
                            icon: "error"
                          });

                          // refresh
                          location.reload();

                    }
                
                },
            });
        }
      });

})
//end of function 

//function to approve customer profile
$('#btnCompanyProfileApprove').click(function () {
    
    //get details
    let comment = $('#txtComment').val()
    let profID = $('#proileid').val()

    if(profID == '') {
        showErrorAlert('Please select company profile to proceed!')
        return false;
    }

     // show prompt
     Swal.fire({
        text: "Do you want to approve company profile?",
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes, Proceed!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            cancelButton: 'btn btn-danger',
            confirmButton: "btn btn-primary"
        }
    }).then((result) => {
        if (result.isConfirmed) {

        // Show page loading
        KTApp.showPageLoading();

         //ajax request
            $.ajax({
                type: "POST",
                data: { profileid: profID, comment:comment},
                url: "http://localhost/lamsuite/dashboard/approveCompanyProfile",
                success: function (data) {

                    //hide
                    KTApp.hidePageLoading();

                    //check data
                    if(data == 1) {

                        Swal.fire({
                            title: "Company Profile Approved!",
                            text: "Record has been approved successully!",
                            icon: "success"
                          });

                          // refresh
                          location.reload();

                    }else {

                        Swal.fire({
                            title: "Unable to approve company profile!",
                            text: "Unable to process your request, please retry!",
                            icon: "error"
                          });

                          // refresh
                          location.reload();

                    }
                
                },
            });
        }
      });

})
//end of function 

//function to load customer profile
$('#btnSearchCompanyProfile').click(function () {
    //get details
    let profileid = $('#proileid').val()

    //check
    if(profileid == '') {
        showErrorAlert('Select Company profile to proceed!')
        return false;
    }

     // Show page loading
     KTApp.showPageLoading();

    //ajax request
    $.ajax({
        type: "POST",
        data: { profileid: profileid},
        url: "http://localhost/lamsuite/dashboard/companyProfileForApproval",
        success: function (data) {

            //hide
            KTApp.hidePageLoading();

            var response = JSON.parse(data);

            //set personal details
            $('#employerName').val(response[0].COMPANY_NAME)
            $('#empAddress').val(response[0].ADDRESS)
            $('#employerArea').val(response[0].AREA_LOCALITY)
            $('#employerState').val(response[0].STATE)

            $('#clientFullname').val(response[0].CONTACT_PERSON)
            $('#phonenumber').val(response[0].CONTACT_PHONE_NUMBER)
            $('#emailaddress').val(response[0].CONTACT_EMAIL)

            $('#clientFullname').val(response[0].CONTACT_PERSON)
            $('#phonenumber').val(response[0].CONTACT_PHONE_NUMBER)
            $('#emailaddress').val(response[0].CONTACT_EMAIL)

            $('#no_staff').val(response[0].NO_OF_STAFF)
            $('#loan_percent').val(response[0].LOAN_LIMIT_PERCENT + "%")
            $('#loanInterest').val(response[0].LOAN_INTEREST_RATE + "%")
            $('#loanTenor').val(response[0].LOAN_TENOR + " Month(s)")
            $('#repayment').val(response[0].REPAYMENT_STRUCTURE)

            $('#dateCreated').val(response[0].PROFILE_DATE_CREATED)
            $('#createdBy').val(response[0].FIRST_NAME + ' ' + response[0].LAST_NAME)
            
        
        },
    });
})
//end of funcfion 

//function to switch dashboards
function switchDashboards(value) {

    if(value == 1) {
        location.replace("http://localhost/lamsuite/dashboard/home")
    }else if(value == 2) {
        location.replace("http://localhost/lamsuite/dashboard/loan")
    }

}
//end of function


//function to load customer loan profile
$('#btnSearchCustomerProfile').click(function () {
    //get details
    let profileid = $('#loanProfileid').val()

    //check
    if(profileid == '') {
        showErrorAlert('Select customer loan profile to proceed!')
        return false;
    }

     // Show page loading
     KTApp.showPageLoading();

    //ajax request
    $.ajax({
        type: "POST",
        data: { profileid: profileid},
        url: "http://localhost/lamsuite/loan/customerLoanApproval",
        success: function (data) {

            //hide
            KTApp.hidePageLoading();

            var response = JSON.parse(data);

            //set personal details
            $('#cust_fullname').val(response[0].FIRST_NAME + ' ' + response[0].LAST_NAME)
            $('#cust_emp_name').val(response[0].EMPLOYER_NAME)
            $('#emp_phone').val(response[0].PHONE_NUMBER)
            $('#emp_email').val(response[0].EMAIL_ADDRESS)

            $('#cust_loan_amount').val(Intl.NumberFormat('en-US').format(response[0].LOAN_AMOUNT))
            $('#cust_loan_tenor').val(response[0].LOAN_TENOR + ' Months')
            $('#cust_loan_purpose').val(response[0].LOAN_PURPOSE)
            $('#cust_loan_interest').val(response[0].INTEREST_RATE + "%")

            $('#cust_mon_repay').val(Intl.NumberFormat('en-US').format(response[0].MONTHLY_REPAYMENT))
            $('#cus_total_paymt').val(Intl.NumberFormat('en-US').format(response[0].TOTAL_REPAYMENT))
            $('#cus_bank_name').val(response[0].BANK_NAME)
            $('#cus_acct_num').val(response[0].ACCOUNT_NUMBER)

            $('#dateCreated').val(response[0].DATE_CREATED)
            $('#createdBy').val('SYSTEM')
            
        
        },
    });
})
//end of funcfion 

//form to submit company profile form
$('#btnCoyProfile').click(function() {

    //get details
    let employerName = $('#employerName').val()
    let companyAddr = $('#empAddress').val()
    let employerArea = $('#employerArea').val()
    let employerState = $('#employerState').val()

    let clientFullname = $('#clientFullname').val()
    let phonenumber = $('#phonenumber').val()
    let emailaddress = $('#emailaddress').val()

    // get loan setup
    let no_staff = $('#no_staff').val()
    let loan_percent = $('#loan_percent').val()
    let loanInterest = $('#loanInterest').val()
    let loanTenor = $('#loanTenor').val()
    let repayStructure = $('#repayStructure').val()

    if(employerName == '' || companyAddr == '' || employerArea == '' || employerState == '' || clientFullname == '' || phonenumber == '' || emailaddress == '')  {
        showErrorAlert('All fields are compulsory!')
        return false;
    }

    if(no_staff == '' || loan_percent == '' || loanInterest == '' || loanTenor == '' || repayStructure == '') {
        showErrorAlert('Please complete loan setup section!')
        return false;
    }

    // show prompt
    Swal.fire({
        text: "Do you want to submit company profile?",
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes, Proceed!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            cancelButton: 'btn btn-danger',
            confirmButton: "btn btn-primary"
        }
    }).then((result) => {
        if (result.isConfirmed) {

            //submit form
            $('#formCompanyProfile').submit()
        }   
    });
    
})
//end of function

$('#btnUpdateWorkflowSetup').click(function() {

    // get loan setup
    let fundtype = $('#fundtype').val()
    let policyType = $('#policyType').val()
    let apprv1 = $('#apprv1').val()
    let apprv2 = $('#apprv2').val()

    if(fundtype == '') {
        showErrorAlert('Please select workflow type!')
        return false;
    }

    if(policyType == '') {
        showErrorAlert('Please select approval policy!')
        return false;
    }

    if(policyType == 'APPR1') {
        if(apprv1 == '') {
            showErrorAlert('Please select approval one!')
            return false;
        }
    }
    
    if(policyType == 'APPR2') {
 
        if(apprv1 == '' || apprv2 == '') {
            showErrorAlert('Please select approval one and two!')
            return false;
        }
    }
    
    // show prompt
    Swal.fire({
        text: "Do you want to set workflow approvals?",
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes, Proceed!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            cancelButton: 'btn btn-danger',
            confirmButton: "btn btn-primary"
        }
    }).then((result) => {
        if (result.isConfirmed) {

            //submit form
            $('#workflowForm').submit()
        }   
    });

})

// search customer button
const btnSearch = document.getElementById('loadSearchCustomer');
const btnApprove = document.getElementById('btnApprove');
const btnReject = document.getElementById('btnReject');

//approve button
btnApprove.addEventListener('click', e =>{
    e.preventDefault();

    var e_comment = document.getElementById("txtComment");
    var comment = e_comment.value;

    var e_customerid = document.getElementById("customer_id");
    var custid = e_customerid.value;

    if(custid == '') {
        Swal.fire({
            text: "Please select a customer to proceed!",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-danger"
            }
        });

        return;
    }

    // show prompt
    Swal.fire({
        text: "Do you want to approve customer record?",
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes, Proceed!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            cancelButton: 'btn btn-danger',
            confirmButton: "btn btn-primary"
        }
    }).then((result) => {
        if (result.isConfirmed) {

        // Show page loading
        KTApp.showPageLoading();

         //ajax request
            $.ajax({
                type: "POST",
                data: { customerid: custid, comment:comment},
                url: "http://localhost:8080/lamsuite/customer/approveCustomerRecord",
                success: function (data) {

                    //hide
                    KTApp.hidePageLoading();

                    //check data
                    if(data == 1) {

                        Swal.fire({
                            title: "Customer Record Approved!",
                            text: "Record has been approved successully!",
                            icon: "success"
                          });

                          // refresh
                          location.reload();

                    }else {

                        Swal.fire({
                            title: "Cannot approve customer record!",
                            text: "Unable to process your request, please retry!",
                            icon: "error"
                          });

                          // refresh
                          location.reload();

                    }
                
                },
            });
        }
      });

})


//function to clear data
function clearFieldData() {

     //set personal details
     document.getElementById("acctType").value = '';
     document.getElementById("kycStatus").value = '';
     document.getElementById("lastname").value = '';
     document.getElementById("firstname").value = '';
     document.getElementById("othername").value = '';
     document.getElementById("gender").value = '';
     document.getElementById("dob").value = '';
     document.getElementById("placeBirth").value = '';
     document.getElementById("phoneNumber").value = '';
     document.getElementById("email").value = '';
     document.getElementById("stateOrigin").value = '';
     document.getElementById("nationality").value = '';

     //correspondence
     document.getElementById("address").value = '';
     document.getElementById("areaLoc").value = response[0].AREA_LOCALITY;
     document.getElementById("cusState").value = response[0].CUSTOMER_STATE;

     //employer details
     document.getElementById("employerName").value = response[0].EMPLOYER_NAME;
     document.getElementById("officeAddress").value = response[0].OFFICE_ADDRESS;
     document.getElementById("empLoc").value = response[0].EMP_AREA_LOCALITY;
     document.getElementById("employerState").value = response[0].EMPLOYER_STATE; 
     document.getElementById("empSector").value = response[0].SECTOR;
     document.getElementById("empGradeLevel").value = response[0].GRADE_LEVEL;

     //nok details
     document.getElementById("nokLastname").value = response[0].NOK_LAST_NAME;
     document.getElementById("nokFirstname").value = response[0].NOK_FIRST_NAME;
     document.getElementById("nokRel").value = response[0].RELATIONSHIP;
     document.getElementById("nokGender").value = response[0].NOK_GENDER;
     document.getElementById("nokPhone").value = response[0].NOK_PHONE;
     document.getElementById("nokEmail").value = response[0].NOK_EMAIL;
     document.getElementById("nok_address").value = response[0].NOK_ADDRESS;
     document.getElementById("nokAreaLoc").value = response[0].NOK_AREA_LOCALITY;
     document.getElementById("nokState").value = response[0].NOK_STATE;
}
//end of function


//search button
btnSearch.addEventListener('click', e =>{
    e.preventDefault();

    var e_customerid = document.getElementById("customer_id");
    var custid = e_customerid.value;

    if(custid == '') {
        Swal.fire({
            text: "Please select a customer to proceed!",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-danger"
            }
        });

        return;
    }

     // Show page loading
     KTApp.showPageLoading();

    //ajax request
    $.ajax({
        type: "POST",
        data: { customerid: custid},
        url: "http://localhost:8080/lamsuite/customer/fetchCustomerDataForApproval",
        success: function (data) {

            //hide
            KTApp.hidePageLoading();

            var response = JSON.parse(data);

            //set personal details
            document.getElementById("acctType").value = response[0].ACCOUNT_TYPE;
            document.getElementById("kycStatus").value = response[0].KYC_STATUS;
            document.getElementById("lastname").value = response[0].LAST_NAME;
            document.getElementById("firstname").value = response[0].FIRST_NAME;
            document.getElementById("othername").value = response[0].OTHER_NAME;
            document.getElementById("gender").value = response[0].GENDER;
            document.getElementById("dob").value = response[0].DATE_OF_BIRTH;
            document.getElementById("placeBirth").value = response[0].PLACE_OF_BIRTH;
            document.getElementById("phoneNumber").value = response[0].PHONE_NUMBER;
            document.getElementById("email").value = response[0].EMAIL_ADDRESS;
            document.getElementById("stateOrigin").value = response[0].STATE_OF_ORIGIN;
            document.getElementById("nationality").value = response[0].NATIONALITY;

            //correspondence
            document.getElementById("address").value = response[0].ADDRESS;
            document.getElementById("areaLoc").value = response[0].AREA_LOCALITY;
            document.getElementById("cusState").value = response[0].CUSTOMER_STATE;

            //employer details
            document.getElementById("employerName").value = response[0].EMPLOYER_NAME;
            document.getElementById("officeAddress").value = response[0].OFFICE_ADDRESS;
            document.getElementById("empLoc").value = response[0].EMP_AREA_LOCALITY;
            document.getElementById("employerState").value = response[0].EMPLOYER_STATE; 
            document.getElementById("empSector").value = response[0].SECTOR;
            document.getElementById("empGradeLevel").value = response[0].GRADE_LEVEL;

            //nok details
            document.getElementById("nokLastname").value = response[0].NOK_LAST_NAME;
            document.getElementById("nokFirstname").value = response[0].NOK_FIRST_NAME;
            document.getElementById("nokRel").value = response[0].RELATIONSHIP;
            document.getElementById("nokGender").value = response[0].NOK_GENDER;
            document.getElementById("nokPhone").value = response[0].NOK_PHONE;
            document.getElementById("nokEmail").value = response[0].NOK_EMAIL;
            document.getElementById("nok_address").value = response[0].NOK_ADDRESS;
            document.getElementById("nokAreaLoc").value = response[0].NOK_AREA_LOCALITY;
            document.getElementById("nokState").value = response[0].NOK_STATE;
        
        },
    });

});