
class detailApi {
    static getDetailPost(post_id) {
        var apiUrl = 'http://localhost:8000/api/detail/';
        return fetch(apiUrl + post_id).then(response => {
            return response.json();

        }).catch(error => {
            return error;
        });
    }
}
export default detailApi;