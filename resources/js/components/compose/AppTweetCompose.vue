<template>
    <form class="flex" @submit.prevent="submit">
        <div class="mr-3">
            <img :src="$user.avatar" alt="avatar" class="w-12 rounded-full">
        </div>
        <div class="flex-grow">
            <textarea 
            class="bg-gray-900 w-full outline-none text-gray-300 text-lg resize-none mb-2"
            placeholder="What's happening?"
            autofocus
            v-model="form.body"
            ></textarea>

            <div class="flex justify-between">
                <div>
                </div>

                <div>
                    <button 
                        type="submit" 
                        class="bg-blue-500 rounded-full text-gray-30 text-center px-4 py-3 font-bold leading-none"
                        >
                    Tweet
                    </button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            form: {
                body: '',
            }
        }
        
    },

    methods: {
        async submit() {
            await axios.post('/api/tweets', this.form)
        }
    }
}
</script>
