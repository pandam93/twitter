import axios from 'axios'

export default {
    namespaced: true,

    state: {
        tweets: []
    },

    getters: {
        tweets(state) {
            return state.tweets
                .sort((a,b) => b.created_at - a.created_at)
        }

    },

    // Filtering tweets that are already visible
    mutations: {
        PUSH_TWEETS(state, data) {
            state.tweets.push(
                ...data.filter((tweets) => {
                    return !state.tweets.map((t) => t.id).includes(tweet.id)
                })
                )
        }
    },

    actions: {
        async getTweets({ commit }, url) {
            let response = await axios.get(url)

            commit('PUSH_TWEETS', response.data.data)

            return response
        }
    }
}