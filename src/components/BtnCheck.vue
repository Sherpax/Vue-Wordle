<!-- Autor: Manuel Santiago Vázquez Del Pino -->
<template>
  <div class="btn-div">
    <button id="btn-check">Comprobar</button>
    <button @click="reset">Reiniciar</button>
  </div>
</template>

<script>
//TODO hacer botón disabled hasta palabra completa?
export default {
  name: "ButtonCheck",
  methods: {
    reset() {
        window.location.reload();
    }
  }
};
</script>

<style scoped>
.btn-div {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  row-gap: 31px;
  margin-top: 50px;
}
.btn-div > button {
  padding: 20px;
  text-align: center;
  font-weight: bold;
  font-size: 15px;
  cursor: pointer;
}
</style>
