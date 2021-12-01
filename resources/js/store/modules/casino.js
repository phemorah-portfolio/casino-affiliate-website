import axios from "axios"

const state = {
 casinos: {}    
}

const mutations = {
    storeCasinos(state, payload) { 
        state.casinos = payload
    }
}

const actions = {
    fetchCasinos({commit}) {
        axios.get('/api/casinos').then(response => {
            if(response.status >= 200 && response.status < 300) {
                commit('storeCasinos', response.data)
            }
        }).catch((errors) => {
          console.log(errors + "Failed Fetching Casinos")
        })
    },
    deleteCasino(id) {
        axios.get('/api/delete/casino/'+id).then(response => {
          if(response.status >= 200 && response.status < 300) {
            // this.fetchAllCasinos()
          }
        })
    }
}

const getters = {}


export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
}