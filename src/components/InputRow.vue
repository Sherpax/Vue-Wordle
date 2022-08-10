<!-- Autor: Manuel Santiago Vázquez Del Pino -->
<template>
  <div class="row">
    <input
      type="text"
      @keypress="filtraTeclas"
      autoComplete="off"
      maxLength="1"
    />
    <input
      type="text"
      @keypress="filtraTeclas"
      autoComplete="off"
      maxLength="1"
    />
    <input
      type="text"
      @keypress="filtraTeclas"
      autoComplete="off"
      maxLength="1"
    />
    <input
      type="text"
      @keypress="filtraTeclas"
      autoComplete="off"
      maxLength="1"
    />
    <input
      type="text"
      @keypress="filtraTeclas"
      autoComplete="off"
      maxLength="1"
    />
  </div>
</template>

<script>
export default {
  name: "inputRow",

  methods: {
    filtraTeclas(e) {
      e.preventDefault();
      const REGEX_LETTERS_ONLY = /^[a-zA-ZñÑ]+/;
      if (e.keyCode !== 13 && e.key.match(REGEX_LETTERS_ONLY)) {
          e.target.value = e.key.toUpperCase();
      }
    },
  },
};
</script>

<style scoped>
.row {
  display: grid;
  grid-template-columns: repeat(5, minmax(63px, 85px));
  justify-content: center;
  margin-bottom: 6px;
  column-gap: 7px;
}

.row > input {
  padding: 30px;
  width: 25px;
  text-align: center;
  border: 1px solid black;
  color: rgb(243, 9, 9);
  font-size: larger;
  font-weight: bold;
}

@media only screen and (max-width: 470px) {
  .row {
    column-gap: 0px;
  }
  .row > input {
    padding: 18px !important;
    width: 33px !important;
  }
}

@media only screen and (max-width: 375px) {
  .row {
    column-gap: 0px;
  }
  .row > input {
    padding: 15px !important;
    width: 33px !important;
  }
}

@media only screen and (max-width: 346px) {
  .row {
    column-gap: 0px;
  }
  .row > input {
    padding: 13px !important;
    width: 33px !important;
  }
}
</style>
