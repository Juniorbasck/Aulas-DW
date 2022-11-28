const helloVue = {
	data(){
		return {
			mensagem:  "hello Word Vue!"
		}
	}
}

Vue.createApp(helloVue).mouseout('#app')