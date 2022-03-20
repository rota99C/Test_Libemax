<template>
  <div>
    <table id="table">
      <thead>
        <tr>
          <th>Employee</th>
          <th>Direction</th>
          <th>Date and Time</th>
          <th>Duration</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="clocking in clockings" :key="clocking.id">
          <td>
            {{ clocking.employee.name }}
            {{ clocking.employee.surname }}
          </td>
          <td>
            {{ clocking.direction }}
          </td>
          <td>
            {{ clocking.created_at }}
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import Axios from "axios";
import DataTable from "datatables.net";

export default {
  data() {
    return {
      clockings: [],
      table: "",
      newData: [],
    };
  },
  mounted() {
    Axios.get("api/clockings").then((response) => {
      console.log(response);
      this.clockings = response.data;
      console.log(this.clockings);
    });

    this.table = new DataTable("#table", {
      paging: false,
      data: this.clockings,
      columns: [
        { data: "employee" },
        { data: "direction" },
        { data: "created_at" },
        { data: "duration" },
      ],
    });
  },
};
</script>
