/**
 * Created by max on 29/11/15.
 */

Vue.component('tasks', {

    template: '#tasks-template',

    data: function()
    {
        return {
            list: []
        };
    },

    created: function()
    {
        this.fetchTaskList();
    },

    methods: {
        fetchTaskList: function()
        {
            $.getJSON('api/tasks', function(tasks) {

                this.list = tasks;

            }.bind(this));
        },
        delete: function(task)
        {
            this.list.$remove(task);
        }
    }
});

new Vue({
    el: 'body'
});