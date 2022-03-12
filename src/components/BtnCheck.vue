<!-- Autor: Manuel Santiago Vázquez Del Pino -->
<template>
  <div id="btn-check" class="btn-div">
    <button>Comprobar</button>
  </div>
</template>

<script>
//TODO hacer botón disabled hasta palabra completa?
export default {
  name: "ButtonCheck",
};
</script>

<style scoped>
.btn-div {
  display: flex;
  justify-content: center;
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
