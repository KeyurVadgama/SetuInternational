<template>
  <div>
    <p>{{ el }}</p>
  </div>
</template>

<script setup>
import axios from '@axios';
import { ref } from 'vue';
const el = ref()

onMounted(() => {
  console.log('Keyur helloo');
  axios.get('http://127.0.0.1:8000/api/greetings').then(response => {
    console.log(response);
    el.value = response.data;
  }).catch(e => {
    console.log('error', e)
  })
})
</script>
