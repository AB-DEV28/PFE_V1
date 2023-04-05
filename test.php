<div class="copy-text">
                                <input class="text" id="' . $i . '" type="text" value="' . $quiz['url_quiz'] . '">
                                <button>
                                    <i class="fa fa-clone"></i>

                                </button>
                            </div>
<style>
                                .copy-text {
                                    position: relative;
                                    padding: 10px;
                                    background: #fff;
                                    border: 1px solid #ddd;
                                    border-radius: 10px;
                                    display: flex;
                                    margin: 0;
                                    box-sizing: border-box;
                                }

                                .copy-text input.text {
                                    padding: 10px;
                                    font-size: 18px;
                                    color: #555;
                                    border: none;
                                    outline: none;
                                }

                                .copy-text button {
                                    padding: 10px;
                                    background: #5784f5;
                                    color: #fff;
                                    font-size: 18px;
                                    border: none;
                                    outline: none;
                                    border-radius: 10px;
                                    cursor: pointer;
                                }

                                .copy-text button:active {
                                    background: #809ce2;
                                }

                                .copy-text button:before {
                                    content: "Copied";
                                    position: absolute;
                                    top: -45px;
                                    right: 00px;
                                    background: #5c91dc;
                                    padding: 8px 10px;
                                    border-radius: 20px;
                                    font-size: 15px;
                                    display: none;
                                }

                                .copy-text button:after {
                                    content: "";
                                    position: absolute;
                                    top: -20px;
                                    right: 25px;
                                    width: 10px;
                                    height: 10px;
                                    background: #5c91dc;
                                    transform: rotate(45deg);
                                    display: none;
                                }

                                .copy-text.active button:before .copy-text.active button:after {
                                    display: block;
                                }
                            </style>
                            <script>
                                let copyText = document.querySelector(".copy-text");
                                copyText.querySelector("button").addEventListener("click", function() {
                                    let input = copyText.querySelector("input.text");
                                    input.select();
                                    document.execCommand("copy");
                                    copyText.classList.add("active");
                                    window.getSelection().removeAllRanges();
                                    setTimeout(function() {
                                        copyText.classList.remove("active");
                                    }, 2500);
                                });
                            </script>



<script>
                                function coping(id) {
                                    var input = getElementById('id').innerText;
                                    input.select();
                                    document.execCommand("copy");
                                    window.getSelection().removeAllRanges();
                                }
                            </script>
                            <script>
                                function copyContent(elementId) {
                                    // Get the content of the element by ID
                                    const element = document.getElementById(elementId);
                                    const content = element.textContent;

                                    // Create a new temporary textarea element
                                    const textarea = document.createElement('textarea');
                                    textarea.value = content;
                                    textarea.setAttribute('readonly', '');
                                    textarea.style.position = 'absolute';
                                    textarea.style.left = '-9999px';

                                    // Add the textarea element to the document
                                    document.body.appendChild(textarea);

                                    // Select the content of the textarea and copy it to the clipboard
                                    textarea.select();
                                    document.execCommand('copy');

                                    // Remove the temporary textarea element from the document
                                    document.body.removeChild(textarea);
                                }
                            </script>