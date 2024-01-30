=============================
           GET
=============================

GET method for getting the csrf token
http://localhost/mcha-express/website/api/v1/security/csrf-token

=============================
           POST
=============================

POST method for inserting book
http://localhost/mcha-express/website/api/v1/book/:csrfToken

Names: 
    full_name
    email_address
    contact_number
    complete_address
    details


POST method for inserting e-waybill
http://localhost/mcha-express/website/api/v1/waybill/:csrfToken

Names: 
    e_waybill
    sender
    sender_phone
    sender_address
    consignee
    consignee_phone
    consignee_address
    size


POST method for inserting inquiry
http://localhost/mcha-express/website/api/v1/inquiry/:csrfToken

Names: 
    name
    email
    subject
    message