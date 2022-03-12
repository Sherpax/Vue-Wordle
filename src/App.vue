<!-- Autor: Manuel Santiago Vázquez Del Pino -->
<template>
  <div class="grid">
    <inputRow></inputRow>
    <inputRow></inputRow>
    <inputRow></inputRow>
    <inputRow></inputRow>
    <inputRow></inputRow>
  </div>
  <btn-check></btn-check>
</template>

<script>
import InputRow from "./components/InputRow";
import BtnCheck from "./components/BtnCheck.vue";

export default {
  name: "App",
  components: {
    InputRow,
    BtnCheck,
  },
};

</script>

<style>
body {
  background-color: black;
}

.grid {
  margin-top: 140px;
}
</style>
