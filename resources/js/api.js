import axios from "axios";
class API {
    constructor() {

    }

    login(login, password) {
        return new Promise((resolve, reject) => {
            axios.post('/login', {login, password}, {headers: {}})
                .then(response => {
                    resolve(response)
                })
                .catch(err => reject(err.message))
        })
    }

}

export default new API()
