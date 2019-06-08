class postApi {
    static getAllPosts() {
        return fetch('http://localhost:8000/api/posts',{method: 'GET'}).then(response => {
            return response.json();
        }).catch(error => {
            return error;
        });
    }


    static createNewPost(post) {
        // const request = new Request('http://localhost:8000/api/posts/', {
        //     method: 'POST',
        //     // mode:'cors',
        //     headers: new Headers({
        //         // 'Accept': 'application/json',
        //         'Content-Type': 'application/json'
        //     }),
        //     body: JSON.stringify(post)
        // });
        //
        // return fetch(request).then(response => {
        //     return response.json();
        // }).catch(error => {
        //     return error;
        // });

        (async () => {
            const request = await new Request('http://localhost:8000/api/posts/', {
                method: 'POST',
                headers: new Headers({
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }),
                body: JSON.stringify({post})
            });


            return post = await request.json();
            console.log(post);
        })();

    }


}
export default postApi;
