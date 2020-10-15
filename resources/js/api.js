import axios from "axios";
class API {
    constructor() {

    }
    form(token, name, phone, email) {

        const data = {
            '_token': token,
            'name': name,
            'phone': phone,
            'email': email
        }

        return new Promise((resolve, reject) => {
            axios.post("/sendInFuture", data)
                .then(response => {
                    console.log(response)
                    resolve()
                })
                .catch(error =>  {
                    console.warn(error)
                    reject(error.response.data.errors)
                })
            // console.log(token, name, phone, email)
        // $.ajax({
        //     url: "/sendInFuture",
        //     type: "POST",
        //     sync: true,
        //     // dataType: "html",
        //     // contentType: false,
        //     // processData: false,
        //     data: {
        //         '_token': token,
        //         'name': name,
        //         'phone': phone,
        //         'email': email
        //     },
        //     success: function (data) {
        //
        //         window.location.href = '/sendInFuture';
        //         // const value = JSON.parse(data);
        //         resolve(data)
        //     },
        //     error: function (error) {
        //         console.warn('1111111111111', error)
        //         reject(error)
        //     },

            // success: function(data){
            //     console.log(data)
            //     window.location.href = '/sendInFuture';
            //     const value = JSON.parse(data)
            //
            //     // $('#app').html(data);
            // }
            //НЕ РАБОТАЕТ
        // })
    })
    }
    formRegister (token, name, phone, email, passwordConf, password, text_letter='', dateLetter, video_src='') {
        const data = {
            '_token': token,
            'name': name,
            'phone': phone,
            'email': email,
            'password_confirmation': passwordConf,
            'password': password,
            'dateLetter': dateLetter,
            'text_letter': text_letter,
            'video_src': video_src,

        };

        return new Promise((resolve, reject) => {
            axios.post('/register', data)
                .then(response => {
                    console.log(response)
                    resolve()
                })
                .catch(error => {
                    console.warn(error)
                    reject(error.response.data.errors)
                        //
                })
            // $.ajax({
            //     url: "/register",
            //     type: "POST",
            //     sync: true,
            //     // dataType: "html",
            //     // contentType: false,
            //     // processData: false,
            //     data: {
            //         '_token': token,
            //         'name': name,
            //         'phone': phone,
            //         'email': email,
            //         'password_confirmation': passwordConf,
            //         'password': password,
            //         'dateLetter': dateLetter,
            //         'text_letter': text_letter,
            //         'video_src': video_src,
            //
            //     },
            //
            //     success: function (data) {
            //
            //
            //         // $('#app').html(data);
            //
            //
            //     },
            //     error: function (error) {
            //         const responseText = JSON.parse(error.responseText)
            //         console.warn(error)
            //         alert(responseText.message)
            //
            //         reject(error)
            //     },
            // })
        })
    }


    formLogin (token, email, password) {

        const data = {
            '_token': token,
            'email': email,
            'password': password,
        }
        return new Promise((resolve, reject) =>  {
            axios.post("/en/login", data)
                .then(response => {
                    console.log(response)
                    resolve()
                })
                .catch(error => {
                    reject(error.response.data.errors)
                })
        })
    }
}

export default new API()
